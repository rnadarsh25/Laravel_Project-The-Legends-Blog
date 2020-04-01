<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingController extends Controller
{
    public function settings(){
        
        $setting = Setting::first();
        
        return view('settings')->with('setting', $setting);
        
    }
    
    public function update(Request $request,$id){
        
        $request->validate([
            'site_name' => 'required',
            'contact_number'=> 'required', 
            'contact_email'=> 'required',
            'address'=> 'required', 
            'copyright_text'=> 'required'
            
        ]);
        
        $setting = Setting::find($id);
        
        $setting->site_name = $request->site_name;
        $setting->contact_number = $request->contact_number;
        $setting->contact_email = $request->contact_email;
        $setting->address = $request->address;
        $setting->copyright_text = $request->copyright_text;
        
        $setting->save();
        
        Session::flash('success', 'Setting updated successfully!');
        
        return redirect()->back();
    }
}
