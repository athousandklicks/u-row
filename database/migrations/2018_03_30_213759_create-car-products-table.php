<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('stock_number');
            $table->string('drivetrain')->nullable();
            $table->string('body_style')->nullable();
            $table->string('transmission')->nullable();
            $table->string('mileage')->nullable();
            $table->float('price')->nullable();
            $table->string('year')->nullable();
            $table->string('model')->nullable();
            $table->string('vin_number')->nullable();
            $table->string('condition')->nullable();
            $table->string('special_offer')->nullable();
            $table->enum('status', array(0, 1, 2, 3, 4, 5))->default(0);
            $table->enum('front_slide', array(0, 1))->default(0);
            $table->text('description')->nullable();
            $table->text('comment')->nullable();
            $table->enum('promo_phrase', array(0, 1, 2, 3, 4, 5))->default(0);
            // $table->enum('promo-phrase', array('Hot', 'Just Arrived', 'none', 'sold', 'Under Negotiation'))->default('none');
            $table->integer('doors')->nullable();
            $table->integer('passengers')->nullable();
            $table->integer('miles')->nullable();
            $table->string('interior')->nullable();
            $table->string('exterior')->nullable();
            $table->string('country')->nullable();
            $table->integer('no_of_interest')->nullable();
            $table->string('image_full')->nullable();
            $table->string('image_dashboard')->nullable();
            $table->string('image_leftside')->nullable();
            $table->string('image_rightside')->nullable();
            $table->string('image_back')->nullable();
            $table->string('image_engine')->nullable();
            $table->string('image_frontseat')->nullable();
            $table->string('image_backseat')->nullable();
            $table->string('image_front')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
