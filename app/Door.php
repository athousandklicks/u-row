<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
     protected $table = 'doors';

   	public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
