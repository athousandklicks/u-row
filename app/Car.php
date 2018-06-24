<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
        protected $fillable=['name', 
                            'stock-number',
                            'drivetrain',
                            'body-style',
                            'transmission',
                            'mileage',
                            'price',
                            'year',
                            'model',
                            'vin-number',
                            'engine',
                            'fuel-type',
                            'condition',
                            'special-offer',
                            'status',
                            'description',
                            'comment',
                            'promo-phrase',
                            'doors',
                            'passengers',
                            'miles',
                            'interior',
                            'exterior',
                           ' image-full',
                            'image-dashboard',
                            'image-leftside',
                            'image-rightside',
                            'image-back',
                            'image-engine',
                            'image-boot',
                            'image-frontseat',
                            'image-backseat',
                            'image-front',
                            'video'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function promoPhrase()
    {
        return $this->belongsTo(PromoPhrase::class);
    }

    public function door()
    {
        return $this->belongsTo(Door::class);
    }

    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }

    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function bodyStyle()
    {
        return $this->belongsTo(Bodystyle::class);
    }

    public function driveTrain()
    {
        return $this->belongsTo(Drivetrain::class);
    }    

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }  

        public function specialOffer()
    {
        return $this->belongsTo(SpecialOffer::class);
    }          

}
