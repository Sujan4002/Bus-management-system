<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'fk_ride_id',
        'seat_number',
        'fare',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'locations',
        'gender',
        'payment',
    ];
    public function ride()
    {
        return $this->belongsTo('App\Models\Rides', 'fk_ride_id');
    }
}
