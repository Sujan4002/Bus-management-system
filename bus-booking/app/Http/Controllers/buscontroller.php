<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class buscontroller extends Controller
{
    public function index(){
        return view('layout.home');
    }
    public function search(Request $request){
        $request->validate(['departure'=>'required','arrival'=>'required']);
        $departure = $request->input('departure');
        $arrival = $request->input('arrival');
        $buses =DB::table('buses')
        ->select('buses.*','rides.departure','rides.arrival','rides.departure_time','rides.arrival_time')
        ->leftjoin('rides','rides.fk_bus_id','=','buses.bus_id')
        ->where('departure','=',$departure)
        ->where('arrival','=',$arrival)->get();
         return view ('layout.search',['buses'=>$buses]);
    }
    public function contact_us(){
        return view('layout.contact');
    }
   public function about_us(){

    return view('layout.about');
   }
}

