<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Front extends Model
{
	protected $table = 'find_car';
    protected $fillable=[
    						'name', 
                            'drivetrain',
                            'body-style',
                            'transmission',
                            'year',
                            'model',
                            'description'
                            ];
}
