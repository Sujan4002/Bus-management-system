<?php

namespace App\Http\Controllers;
use App\Models\rides;
use App\Models\buses;
use App\Models\booking;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Bookingcontroller extends Controller
{
    public function booking_form($ride_id){
        $buses= rides::find($ride_id);
        $busdetail= DB::table('buses')
        ->where('bus_id',$buses->fk_bus_id)->first();
        
        $seatnumber=$this->get_seat_number($busdetail->capacity);
        //check if selected seat is available or not
          
           
           
            
            
        return view('booking.bookingform',['buses'=>$buses,'busdetail'=>$busdetail,'seatnumber'=>$seatnumber]);
}
public function booking_process(Request $request,$ride_id){
    //validate part
   $request->validate(['firstname'=>'required|string|max:255','middlename'=>'nullable|string|max:255','lastname'=>'required|string|max:255','email'=>'required|email|max:255','locations'=>'required|string','gender'=>'required','payment'=>'required','seat_number'=>'required']);
      //checking seats full or avaiable
      if($this->isAllSeatFull($ride_id)){
       return redirect()->back()->with('error','All seats are booked. please try again later.');
      }

   //storing
   $booking = new booking([ 'fk_ride_id'=>$ride_id,
'firstname'=>$request->input('firstname'),'middlename'=>$request->input('middlename'),'lastname'=>$request->input('lastname'),'email'=>$request->input('email'),'locations'=>$request->input('locations'),'gender'=>$request->input('gender'),'payment'=>$request->input('payment'),'seat_number'=>$request->input('seat_number'),]) ;
   $booking->save();
   return redirect('/bookingconfirm')->with('success','Booking succesfully');
   
}
private function get_seat_number($capcity){
    //set generating algo
     $seatNumbers=[];
     $rows= ceil($capcity/6);// ceil for round figure number 
     $seatsPerRow= ceil($capcity/$rows);
     for($row=1;$row<=$rows;$row++){
        for($seat=1;$seat<=$seatsPerRow;$seat++){
            $seatNumbers[]= chr(64+$row) . $seat;
        }
     }
     return $seatNumbers;
}

private function isAllSeatFull($ride_id){
$totalBooking=Booking::where('fk_ride_id',$ride_id)->count();
$ride=Rides::find($ride_id);
$busId= $ride->fk_bus_id;
$busCapacity= Buses::where('bus_id',$busId)->value('capacity');
return $totalBooking>=$busCapacity;
}

}
