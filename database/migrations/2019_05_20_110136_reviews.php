<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("KlantID");
            $table->string("Titel", 100);
            $table->text("Text");

            $table->foreign('KlantID')->references('id')->on('Users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Reviews');
    }
}
