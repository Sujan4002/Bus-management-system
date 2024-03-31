<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buses extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_id',
        'operator_name',
        'bus_number',
        'capacity',
    ];
}
