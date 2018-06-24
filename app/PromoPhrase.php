<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoPhrase extends Model
{
	protected $table = 'promo-phrase';

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
