<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    protected $table = 'fuel-type';

   	public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
