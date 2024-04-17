<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\buses;
use App\Models\Rides;
use  App\Models\Contact;
use  App\Models\booking;
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
    //start of users table related functions 
    public function userlist(){
        $user = user::all(); // Fetch all users from the User model
        return view('Admin.userList',['users'=>$user]); // Pass users data to the view
    }
    public function show($id){
        $user = user::find($id);
     
        return view('Admin.userdetails',['user'=>$user]);
    }
    public function useredit($id){
        $user = user::find($id);
        return view('Admin.userEdit',compact('user'));
    }
    public function userUpdate(Request $request,$id){
        $user = user::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->role=$request->input('role');
        $user->update();
        return redirect('admin/userlist')->with('status','data updated successfully');
    }
    public function destroy($id)
	{
		$user=user::find($id);
		$user->delete();
		return redirect('admin/userlist');
	}
    public function adduser(){
        return view ('Admin.adduser');
       }
       public function addnewuser(Request $request){
            //validate data 
            $request->validate(['name'=>'required','email'=>'required|unique:users|email','password'=>'required|confirmed']);//validation
            user::create(['name' => $request->name, 'email' => $request->email,'password' => \Hash::make($request->password),'role' => $request->role,]);//pass data to users table throw user model
            return redirect('/admin/userlist');
       }
    //end of user reledted funtion
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
    
 
   public function enquiry(){
     
     $item =Contact::all();
     return view('Admin.enquiry',['contact'=>$item]);
   }
   public function bookings(){
     
    $bookings=Booking::join('rides','bookings.fk_ride_id','=','rides.ride_id')
    ->join('buses','rides.fk_bus_id','=','buses.bus_id')
    ->select('bookings.booking_id','bookings.firstname','bookings.lastname','bookings.seat_number','bookings.email','bookings.payment','rides.*')->get();

    return view('Admin.bookings',['bookings'=>$bookings]);
}
  }

