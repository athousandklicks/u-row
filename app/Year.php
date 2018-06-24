<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'year';

   	public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
