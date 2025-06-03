<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UmrohBooking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'departure_date',
    ];
}
