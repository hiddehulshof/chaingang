<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bestellingen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("klantID");
            $table->unsignedInteger("statusID");
            $table->dateTime("bestelDatum");
            $table->dateTime("leverDatum");
            $table->string("postcode", 15);
            $table->string("straat", 40);
            $table->string("huisnr", 5);
            $table->string("plaats", 30);

            $table->foreign('klantID')->references('id')->on('Users')->onDelete('cascade');
            $table->foreign('StatusID')->references('id')->on('OrderStatus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Orders');
    }
}
