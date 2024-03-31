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
        $ride->departure ='Asansol';
        $ride->arrival='Raniganj';
        $ride->departure_time ='7:30 am';
        $ride->arrival_time ='8:00am' ;
        $ride->status = 1;
        $ride->fk_bus_id= 101;
        $ride->save();
    }
}
