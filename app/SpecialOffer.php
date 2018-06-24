<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
        protected $table = 'special-offers';

   	public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
