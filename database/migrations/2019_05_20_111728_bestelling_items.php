<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BestellingItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderItems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ProductID');
            $table->unsignedInteger('BestellingID');

            $table->foreign('ProductID')->references('id')->on('Bikes')->onDelete('cascade');
            $table->foreign('BestellingID')->references('id')->on('Orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OrderItems');
    }
}
