<?php

namespace Database\Seeders;

use App\Models\Buses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bus= new buses;
        $bus->bus_id=101;
        $bus->operator_name ='Get your seat luxary';
        $bus->bus_number=1256567;
        $bus->capacity='50';
        $bus->save();
    }
}
