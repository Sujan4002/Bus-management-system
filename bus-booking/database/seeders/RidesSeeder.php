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
        $ride->ride_id='5';
        $ride->departure ='Asansol';
        $ride->arrival='Raniganj';
        $ride->departure_time ='9:40 am';
        $ride->arrival_time ='10:00am';
        $ride->status = 1;
        $ride->fare = 1086;
        $ride->fk_bus_id= 108;
        $ride->save();
    }
}
