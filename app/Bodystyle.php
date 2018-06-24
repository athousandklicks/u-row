<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodystyle extends Model
{
    protected $table = 'body-style';

   	public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
