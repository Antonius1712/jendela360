<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class car_data extends Model
{
    protected $table = 'car_data';

    protected $fillable = [
        'carName',
        'carPrice',
        'carStock'
    ];
}
