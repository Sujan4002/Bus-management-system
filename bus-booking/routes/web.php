<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\buscontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Bookingcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//admin dashboard routes
Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=>'admin.guest'],function(){
        Route::get('/adminindex',[Admincontroller::class,'admin_login'])->name('admin.login');// for admin login page
        Route::post('/authenticate',[Admincontroller::class,'authenticate'])->name('admin.authenticate');//for authentication

    });
    Route::group(['middleware'=>'admin.auth'],function(){
        Route::get('/dashboard',[Admincontroller::class,'dashboard'])->name('admin.dashboard');// for view dashboards
        Route::get('/userlist',[Admincontroller::class,'userlist']);// for view userlist
        Route::get('/logout',[Admincontroller::class,'adminlogout']);// for logout from dashboard
        Route::get('/adduser',[Admincontroller::class,'adduser']);// for adding user
        Route::post('/adduser',[Admincontroller::class,'addnewuser']);// for adding user
        Route::get('/addbus',[Admincontroller::class,'addbus']);// for adding buses
        Route::post('/addbus',[Admincontroller::class,'addnewbus']);// for adding buses
        Route::get('/busroute',[Admincontroller::class,'buses']);// for buses routes view 
        Route::get('/enquiry',[Admincontroller::class,'enquiry']);// for enquiry of user
        Route::get('/bookings',[Admincontroller::class,'bookings']);// for buses bookings

        }
    );

    });

Route::get('/enqview/{id}',[Admincontroller::class,'enqview']);// for view specific enq 
Route::get('/userdetails/{id}',[Admincontroller::class,'show']);// for view userlist
Route::get('/users/{id}',[Admincontroller::class,'useredit'])->name('users.edit');// for view userlist
Route::put('/user-update/{id}',[Admincontroller::class,'userUpdate'])->name('users.update');// for view userlist
Route::delete('user/{id}',[Admincontroller::class,'destroy']);// for delete user form users table 
//website routes
Route::get('/getyourseat',[buscontroller::class,'index']);//for view of homepage
Route::get('/searchforbus',[buscontroller::class,'search']);//for search page
Route::get('/bookingform/{ride_id}',[Bookingcontroller::class,'booking_form']);
Route::post('/booking/{ride_id}',[Bookingcontroller::class,'booking_process']);
Route::get('/bookingconfirm',function(){
  return view ('booking.confirmation');
});
Route::get('/mybookings',[Bookingcontroller::class,'previousBookings']);//for previous booking page
Route::get('/ticket/{booking_id}',[Bookingcontroller::class,'ticketPrint']);//for previous booking page
Route::get('/ticket/{booking_id}/cancel',[Bookingcontroller::class,'cancelBooking']);//for previous booking page
Route::get('/contactus',[buscontroller::class,'contactus_view']);//for contact us page 
Route::post('/contactus',[buscontroller::class,'contact_us']);//for contact us page 
Route::get('/aboutus',[buscontroller::class,'about_us']);//for contact us page 
Route::get('/register',[Authcontroller::class,'register_view']);// for register
Route::post('/register',[Authcontroller::class,'register']);// for storing
Route::get('/index',[Authcontroller::class,'index']);// for login page view
Route::post('/login',[Authcontroller::class,'login']);//for storing
Route::middleware(['auth'])->group(function(){
Route::get('/logout',[Authcontroller::class,'logout']);// for logout
});
