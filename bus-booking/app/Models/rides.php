<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rides extends Model
{
    use HasFactory;
    protected $fillable = [
        'departure',
        'arrival',
        'departure_time',
        'arrival_time',
        'status',
        'fk_bus_id',
        'fare',
    ];
}
