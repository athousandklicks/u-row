<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
        protected $table = 'conditions';

   	public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
