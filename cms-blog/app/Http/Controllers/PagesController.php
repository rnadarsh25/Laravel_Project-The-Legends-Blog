<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Setting;
use App\User;

class PagesController extends Controller
{
    public function index(){
        
        $movie1 = Post::where('category_id', 4)->first();
        $news1 = Post::where('category_id', 2)->first();
        $travel1 = Post::where('category_id', 3)->first();
        $user = User::first();
        
        $posts = Post::orderBy('created_at', 'desc')->take(10)->get();
         
        $categories = Category::all();
        
        $settings = Setting::first();
        
        return view('pages.index')->with([
            'news1' => $news1,
            'movie1' => $movie1,
            'travel1' =>$travel1,
            'posts' => $posts,
            'categories' => $categories,
            'settings' => $settings
            ])->with('user', $user);
    }
    
    public function single($slug){
        
        $post = Post::where('slug', $slug)->first();
        $categories = Category::all();
        $settings = Setting::first();
        $user = User::first();
        
        $next_id = Post::where('id','>', $post->id)->min('id');
        
        $prev_id = Post::where('id','<' ,$post->id)->max('id');
        
        return view('pages.single')->with('post', $post)
            ->with('categories', $categories)
            ->with('settings', $settings)
            ->with('next', Post::find($next_id))
            ->with('prev', Post::find($prev_id))
            ->with('user', $user);
        
    }
    
    public function category($id){
        
        $category = Category::find($id);
        $settings = Setting::first();
        $categories = Category::all();
        $user = User::first();
        
        return view('pages.category')->with('category', $category)
                                    ->with('settings', $settings)
                                    ->with('categories', $categories)
                                    ->with('user', $user);
        
    }
}
