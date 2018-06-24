<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivetrain extends Model
{
     protected $table = 'drivetrain';

   	public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
