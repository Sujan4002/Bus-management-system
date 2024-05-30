<?php

namespace App\Http\Controllers;

use App\Models\Rides;
use App\Models\Buses;
use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking_form($ride_id){
        $buses = Rides::find($ride_id);
        $busdetail = DB::table('buses')
        ->where('bus_id', $buses->fk_bus_id)->first();
        
        $seatnumber = $this->get_seat_number($busdetail->capacity);
        
        return view('booking.bookingform', [
            'buses' => $buses,
            'busdetail' => $busdetail,
            'seatnumber' => $seatnumber
        ]);
    }

    public function booking_process(Request $request, $ride_id){
        // Validate input
        $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'locations' => 'required|string',
            'gender' => 'required',
            'payment' => 'required',
            'seat_number' => 'required|array',  
            'seat_number.*' => 'string'
        ]);

        // Check if all seats are full
        if ($this->isAllSeatFull($ride_id)) {
            return redirect()->back()->with('error', 'All seats are booked. Please try again later.');
        }

        // Check if selected seats are available
        foreach ($request->input('seat_number') as $seat_numbers) {
            if (!$this->isSeatAvailable($ride_id, $seat_numbers)) {
                return redirect()->back()->with('error', 'One or more of the selected seats is already booked!');
            }
        }

        $bookingId = 'GETYRST' . Str::random(6);

        // Storing booking details
        $booking = new Booking([
            'fk_ride_id' => $ride_id,
            'firstname' => $request->input('firstname'),
            'middlename' => $request->input('middlename'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'locations' => $request->input('locations'),
            'gender' => $request->input('gender'),
            'payment' => $request->input('payment'),
            'seat_number' => implode(',', $request->input('seat_number')),  // Convert array to string
            'booking_id' => $bookingId
        ]);
        $booking->save();

        return redirect('/bookingconfirm')->with('success', 'Booking successfully completed');
    }

    private function get_seat_number($capacity){
        $seatNumbers = [];
        $rows = ceil($capacity / 6); // Round up to the nearest integer
        $seatsPerRow = ceil($capacity / $rows);
        for ($row = 1; $row <= $rows; $row++) {
            for ($seat = 1; $seat <= $seatsPerRow; $seat++) {
                $seatNumbers[] = chr(64 + $row) . $seat;
            }
        }
        return $seatNumbers;
    }

    private function isSeatAvailable($ride_id, $seat_numbers){
        $seat_numbers = explode(',', $seat_numbers);
        foreach ($seat_numbers as $seat_number) {
            $booking = Booking::where('fk_ride_id', $ride_id)
                ->where('seat_number', 'like', '%' . trim($seat_number) . '%')
                ->first();
            if ($booking) {
                return false; // Seat is not available
            }
        }
        return true; // All seats are available
    }
    

    private function isAllSeatFull($ride_id){
        $totalBooking= Booking::where('fk_ride_id', $ride_id)
        ->get()
        ->sum(function ($booking) {
            return count(explode(',', $booking->seat_number));
        });
        $ride = Rides::find($ride_id);
        $busId = $ride->fk_bus_id;
        $busCapacity = Buses::where('bus_id', $busId)->value('capacity');
        return $totalBooking >= $busCapacity;
    }

    public function previousBookings(){
        $bookings = Booking::join('rides', 'bookings.fk_ride_id', '=', 'rides.ride_id')
            ->join('buses', 'rides.fk_bus_id', '=', 'buses.bus_id')
            ->select('bookings.*', 'rides.*', 'buses.*', 'bookings.id as booking_id', 'bookings.status as booking_status')
            ->get();

        return view('booking.previousbookings', ['booking' => $bookings]);
    }

    public function ticketPrint($id){
        $ticket = Booking::join('rides', 'bookings.fk_ride_id', '=', 'rides.ride_id')
            ->join('buses', 'rides.fk_bus_id', '=', 'buses.bus_id')
            ->select('bookings.*', 'rides.*', 'buses.*')
            ->find($id);
         $fare_per_seat= $ticket->fare;
        // Calculate fare based on the number of seats
        $total_fare = $fare_per_seat * count(explode(',', $ticket->seat_number));
         
        $pdf = new Dompdf();
        $pdf->loadHtml(view('booking.ticket')->with('ticket', $ticket)->with('total_fare', $total_fare)->render());
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        return $pdf->stream('ticket.pdf');
    }
    // public function cancelBooking($booking_id){
    //     $cancel = Booking::find($booking_id);
    //     if (!$cancel) {
    //         return redirect()->back()->with('error', 'Booking not found.');
    //     }
    //     if ($cancel->status == 'canceled') {
    //         return redirect()->back()->with('error', 'Booking is already cancelled.');
    //     }
    //     $cancel->status = 'canceled';
    //     $cancel->save();
    
    //     $cancellationUrl = url('download-cancellation/' . $cancel->id);
    //     Session::flash('success', 'Booking cancelled successfully. <a href="' . $cancellationUrl . '">Download Cancellation PDF</a>');
    
    //     return redirect()->back();
    // }
    public function cancelBooking($booking_id){
        $cancel = Booking::find($booking_id);
        if (!$cancel) {
            return redirect()->back()->with('error', 'Booking not found.');
        }
        if ($cancel->status == 'canceled') {
            return redirect()->back()->with('error', 'Booking is already cancelled.');
        }
        $cancel->status = 'canceled';
        $cancel->save();
    
        // Generating a relative URL manually
        $cancellationPath = route('download.cancellation', ['id' => $cancel->id], false);
        Session::flash('success', 'Booking cancelled successfully. <a href="' . $cancellationPath . '">Download Cancellation PDF</a>');
    
        return redirect()->back();
    }
    
    public function downloadCancellation($booking_id){
        $ticket = Booking::join('rides', 'bookings.fk_ride_id', '=', 'rides.ride_id')
            ->join('buses', 'rides.fk_bus_id', '=', 'buses.bus_id')
            ->select('bookings.*', 'rides.*', 'buses.*')
            ->find($booking_id);
    
        $pdf = new Dompdf();
        $pdf->loadHtml(view('booking.cancellation_ticket')->with('ticket', $ticket)->render());
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
    
        return $pdf->stream('cancellation_ticket.pdf', [
            'Attachment' => true
        ]);
    }
    
}
