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
        $ride->ride_id='6';
        $ride->departure ='Asansol';
        $ride->arrival='Durgapur';
        $ride->departure_time ='6:40 am';
        $ride->arrival_time ='7:40am';
        $ride->status = 1;
        $ride->fare = 999;
        $ride->fk_bus_id= 109;
        $ride->save();
    }
}
