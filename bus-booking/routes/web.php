<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\buscontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Authcontroller;

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
        Route::get('/busroute',[Admincontroller::class,'buses']);// for buses routes view 
        Route::get('/enquiry',[Admincontroller::class,'enquiry']);// for enquiry of user
    });
});
Route::get('/userdetails/{id}',[Admincontroller::class,'show']);// for view userlist
Route::delete('user/{id}',[Admincontroller::class,'destroy']);// for delete user form users table 
//website routes
Route::get('/getyourseat',[buscontroller::class,'index']);//for view of homepage
Route::get('/searchforbus',[buscontroller::class,'search']);//for search page
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

