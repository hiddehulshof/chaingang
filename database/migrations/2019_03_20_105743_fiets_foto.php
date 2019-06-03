<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FietsFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BikePicture', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("FietsID");
            $table->string("Filename", 255);

            $table->foreign('FietsID')->references('id')->on('Bikes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BikePicture');
    }
}
