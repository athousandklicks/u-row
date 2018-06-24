<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

   	public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
