<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Session;
use Auth;

class UserController extends Controller
{
    
    public function __construct(){
        $this->middleware('admin')->except('my_profile', 'update');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:5'
        ]);
        
        //store users
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        //store profile
        
        if($request->hasFile('avatar')){
            $avatar = $request->avatar;
            $filename = 'avatar-'.time().'-'.$avatar->getClientOriginalName();
            
            $avatar->move('uploads/profiles', $filename);
        }else{
            $filename = "";
        }
        
        $profile = Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/profiles/'.$filename,
            'facebook' => $request->facebook,
            'about' => $request->about
        ]);
        
        Session::flash('success', 'User Created!');
        
        return redirect()->route('users.index');
        
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
        $user = User::find($id);
        
        return view('users.edit')->with('user', $user);
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
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        
        $user = User::find($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        
        if(isset($request->password)){
            $user->password = bcrypt($request->password);
        }
        
        $user->save();
        
        $profile = $user->profile;
        
        if($request->hasFile('avatar')){
            $avatar = $request->avatar;
            $filename = 'avatar-'.time().'-'.$avatar->getClientOriginalName();
            
            $avatar->move('uploads/profiles', $filename);
            
            $profile->avatar = 'uploads/profiles/'.$filename;
        }else{
            $filename = "";
        }
        
        $profile->facebook = $request->facebook;
        $profile->about = $request->about;
        
        $profile->save();
        
        Session::flash('success', 'User updated successfully!');
        
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        if(file_exists($user->profile->avatar)){
            unlink($user->profile->avatar);
        }
        
        $user->profile->delete();
        
        Session::flash('success', 'User Removed!');
        
        return redirect()->back();
    }
    
    public function make_admin($id){
        $user = User::find($id);
        $user->isAdmin = 1;
        $user->save();
        
        Session::flash('success', 'Status: Changed to Admin.');
        
        return redirect()->back();
    }
    
    
    public function remove_admin($id){
        $user = User::find($id);
        $user->isAdmin = 0;
        
        $user->save();
        
        Session::flash('success', 'Status: Admin Removed!.');
        
        return redirect()->back();
    }
    
    public function my_profile(){
        
        $id = Auth::id();
        
        $user = User::find($id);
        
        return view('users.profile')->with('user', $user);
    }
}
