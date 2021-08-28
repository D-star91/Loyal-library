<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Homecontroller extends Controller
{
    function index(){
        $posts=Post::all();
        return view('index',['posts'=>$posts]);

    }
    
    // User
    function home(){
        return view('home');
    }

    // Register
    function register(){
        return view('User.register');
    }
    function post_register(){
        $validation=request()->validate([
            "username"=>"required",
            "email"=>"required",
            "password"=>"required || min:8",
        ]);
        if($validation){
            $password=$validation['password'];
            $user=new User();
            $user->name=$validation['username'];
            $user->email=$validation['email'];
            $user->password=Hash::make($password);
            $user->save();
            
            return redirect()->route('index');
        }else{
            return back()->withErrors($validation);
        }
    }

    function login(){
        return view('User.login');
    }
    function user_login(){
        $validation=request()->validate([
            "email"=>"required",
            "password"=>"required",
        ]);
        
        if($validation){
            $auth=Auth::attempt(["email"=>request('email'),'password'=>request('password')]);
            if($auth){
                return redirect()->route('index');
            }else{
                return back()->with('error','tray again');
            }
        }else{
            return back()->withErrors($validation);
        }
    }

    // logout
    function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
