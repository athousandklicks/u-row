<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FindCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('find_car', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('drivetrain')->nullable();
            $table->string('body_style')->nullable();
            $table->string('transmission')->nullable();
            $table->string('year')->nullable();
            $table->string('model')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', array(0, 1,))->default(0);
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
        Schema::dropIfExists('find_car');
    }
}
