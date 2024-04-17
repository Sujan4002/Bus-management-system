<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function index(){
        return view('Auth.login');
    }
    public function login(Request $request){
        //validate data 
      $request->validate(['email'=>'required','password'=>'required']);
      if(\Auth::attempt($request->only('email','password'))){
        return redirect('/getyourseat')->with('success','log in succesfully');
            }
            return redirect('/index')->with('error','Please check your credential and try again.');
    }
     
    //register page view 
    public function register_view(){
        
        return view('Auth.register');
    }
    public function register(Request $request){
       //validate data 
       $request->validate(['name'=>'required','email'=>'required|unique:users|email','password'=>'required|confirmed']);//validation
       user::create(['name' => $request->name, 'email' => $request->email, 'password' => \Hash::make($request->password)]);//pass data to users table throw user model
       //after register the user directly logged in to the website
       if(\Auth::attempt($request->only('email','password'))){
        return redirect('/getyourseat')->with('success','Registration successful!');
            }
             return redirect('/register');
            }
            public function logout(){
               \Auth::logout();
               return redirect('/index');
            }
            
        }
        

    