<?php

namespace Database\Seeders;
use App\Models\Rides;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ride= new Rides;
        $ride->ride_id='B2';
        $ride->departure ='Raniganj';
        $ride->arrival='Asansol';
        $ride->departure_time ='8:30 am';
        $ride->arrival_time ='9:00am';
        $ride->status = 1;
        $ride->fare = 1000;
        $ride->fk_bus_id= 101;
        $ride->save();
    }
}
