<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class selling_data extends Model
{
    protected $table = 'selling_data';

    protected $fillable = [
        'customerName',
        'customerEmail',
        'customerPhone',
        'purchasedCar'
    ];

    public function getCarData(){
        return $this->hasOne(car_data::class, 'id', 'purchasedCar');
    }

}
