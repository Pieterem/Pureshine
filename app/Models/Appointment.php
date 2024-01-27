<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'email',
        'order_status',
        'omschrijving',
        'service',
        'extra',
        'price',
        'date',
        'time',
    ];
}
