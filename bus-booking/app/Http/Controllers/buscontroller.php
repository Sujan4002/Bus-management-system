<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Buses;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        return view('layout.home');
    }

    public function search(Request $request)
    {
        $request->validate([
            'departure' => 'required',
            'arrival' => 'required',
            'date' => 'required|after_or_equal:today'
        ]);

        $departure = $request->input('departure');
        $arrival = $request->input('arrival');

        $buses = DB::table('buses')
            ->select('buses.*', 'rides.departure', 'rides.arrival', 'rides.departure_time', 'rides.arrival_time', 'rides.fare', 'rides.ride_id')
            ->leftJoin('rides', 'rides.fk_bus_id', '=', 'buses.bus_id')
            ->where('departure', '=', $departure)
            ->where('arrival', '=', $arrival)
            ->get();

        $message = null;
        if ($buses->isEmpty()) {
            $message = 'No buses available for the selected routes or date😔';
        }

        $counts = [];
        foreach ($buses as $bus) {
            $counts[$bus->ride_id] = $this->seatCount($bus->ride_id, $bus->bus_id);
        }

        return view('layout.search', [
            'buses' => $buses,
            'counts' => $counts,
            'message' => $message
        ]);
    }

    private function seatCount($ride_id, $bus_id)
    {
        // Get the booked seats for this ride
        $bookedSeats = Booking::where('fk_ride_id', $ride_id)->pluck('seat_number')->toArray();

        // Get the capacity of the bus associated with this ride
        $busCapacity = Buses::where('bus_id', $bus_id)->value('capacity');

        // Initialize available seats counter
        $availableSeats = $busCapacity;

        // Loop through booked seats and decrement available seats
        foreach ($bookedSeats as $seatNumbers) {
            $seats = explode(',', $seatNumbers);
            $availableSeats -= count($seats);
        }

        return $availableSeats;
    }

    public function contact_us(Request $request)
    {
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect('/contactus');
    }

    public function contactus_view()
    {
        return view('layout.contact');
    }

    public function about_us()
    {
        return view('layout.about');
    }
}
