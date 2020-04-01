<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Category;
use App\Post;
use App\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //get all categories
        $categories = Category::all();
        
        if($categories->count()==0){
            Session::flash('info', 'Add category to continue!!');
            
            return redirect()->back();
        }
        
        $tags = Tag::all();
        
        return view('posts.create')->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //validation
        $this->validate($request, [
            'title'=> 'required', 
            'featured' =>'required|image',
            'content' =>'required',
            'category_id'=>'required'
        ]);
        
        //Change image name
        $featured = $request->featured;
        $originalName = $featured->getClientOriginalName();
        $featured_new_name = 'featured-'.time().'-'.$originalName;
        
        $featured->move('uploads/posts', $featured_new_name);
        
        //create post
        
        $post = Post::create([
           
            'title' =>$request->title,
            'content' => $request->content,
            'featured' => 'uploads/posts/'.$featured_new_name,
            'category_id' =>$request->category_id,
            'slug' => str_slug($request->title),
            
        ]);
        
        $post->tags()->attach($request->tags);
        
        //flash message
        Session::flash('success', 'Post has been Created');
        
        //redirect to index of posts
        return redirect()->route('posts.index')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        
        return view('posts.edit')->with('post', $post)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=> 'required', 
            'featured' =>'image',
            'content' =>'required',
            'category_id'=>'required'
        ]);
        
        
        $post = Post::find($id);
        
        //to check if featured image is uploaded
        if($request->hasFile('featured')){
            $featured = $request->featured;
            
            $originalName = $featured->getClientOriginalName();
            $featured_new_name = 'featured-'.time().'-'.$originalName;
            
            //move
            $featured->move('uploads/posts', $featured_new_name);
            
            //update it
            $post->featured = 'uploads/posts/'.$featured_new_name;
        }
        
        //update remaining
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        
        $post->save();
        
        Session::flash('success', 'Post Updated successfully!');
        
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        
        Session::flash('success', 'Post was deleted!');
        
        return redirect()->back();
    }
    
    public function thrash(){
        
        $posts = Post::onlyTrashed()->get();
        
        return view('posts.trashed')->with('posts', $posts);
    }
    
    public function restore($id){
        
        $post = Post::withTrashed()->where('id', $id)->first();
        
        $post->restore();
        
        Session::flash('success', 'Post was restored successfully!!');
        
        return redirect()->route('posts.index');
    }
    
    public function kill($id){
        
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        
        Session::flash('success', 'Post Deleted!');
        
        return redirect()->back();
    }
}
