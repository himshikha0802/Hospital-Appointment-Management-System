<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\register\register;
use App\Models\User;
use Illuminate\Support\Carbon;

class RegisterController extends Controller
{
    public $uploadPath="uploads/user";
    //open forms
    public function registerForm(){
        if(auth()->check())
        return redirect()->route('dashboard');
        return view('admin.auth.register');
    }
    public function loginForm(){
        if(auth()->check())
        return redirect()->route('dashboard');
        return view('admin.auth.login');
    }

    //registers user
    public function registerUser(Request $request){
        $request->validate([
            "first_name"=>'required',
            "last_name"=>'required',
            "email"=>'required|email|unique:users',
            "password"=>'required|min:6',
            "password_confirmation"=>'required_with:password|same:password|min:6',
        //    "usertype"=>'required',
            "image"=>'image|nullable|max:1999',
        ]);
         $fileName=null;
        if($request->file('image')){
        $fileName=strtotime(Carbon::now());
         $fileName= $fileName.".".$request->file('image')->extension();
        $uploadPath=(public_path($this->uploadPath."/".$fileName));
         move_uploaded_file($request->file('image'), $uploadPath);
        }
        $user=new User();//User() is a class which create new object or instance $user
        $user->first_name=$request->get('first_name');
        $user->last_name=$request->get('last_name');
        $user->email=$request->get('email');
     //   $user->usertype=$request->get('usertype');
        $user->password=bcrypt($request->get('password'));
        $user->image=$fileName;

         if($user->save()){
             return redirect()->route('auth.register')->with(['msg'=>"User create successfully"]);
            return redirect()->route('auth.register')->withError(['msg'=>"User cannot be registered at the moment"]);
        }
    }
}
