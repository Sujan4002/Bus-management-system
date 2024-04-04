<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\buses;
use  App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class Admincontroller extends Controller
{
    public function dashboard(){
        return view('Admin.dashboard');
    }
    public function buses(){

        $busRoutes= buses::all();
        return view('Admin.buses',['busroutes'=>$busRoutes]);
    }
    public function userlist(){
        $user = user::all(); // Fetch all users from the User model
        return view('Admin.userList',['users'=>$user]); // Pass users data to the view
    }
    
    public function destroy($id)
	{
		$user=user::find($id);
		$user->delete();
		return redirect('admin/userlist');
	}
    public function admin_login(){

        return view('Admin.Adminlogin');
    }
    public function authenticate(Request $request){
        // Validate data 
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        // If validation passes, attempt to authenticate the user
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            $admin= Auth::guard('admin')->user();
            if($admin->role==2){
            // Authentication successful, redirect to dashboard or any desired route
            return redirect()->route('admin.dashboard');
            }
            else{
                $admin= Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('error', 'You are not authorized to access the admin panel');
            }
        } 
        else{
            // Authentication failed, redirect back to login with an error message
            return redirect()->route('admin.login')
                ->with('error', 'Invalid email or password')
                ->withInput($request->only('email'));
        }
    }
    
    public function adminlogout(){
        Auth::guard('admin')->logout();
        return redirect ()->route('admin.login');
    }
    
   public function adduser(){
    return view ('Admin.adduser');
   }
   public function enquiry(){
     
     $item =Contact::all();
     return view('Admin.enquiry',['contact'=>$item]);
   }
}
