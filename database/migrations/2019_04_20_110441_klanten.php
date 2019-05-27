<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Klanten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Klanten', function (Blueprint $table) {
            $table->increments('id');
            $table->string("Voornaam", 50);
            $table->string("Achternaam", 50);
            $table->string("Tussenvoegsel", 20);
            $table->string("Email", 50);
            $table->string("Wachtwoord", 50);
            $table->string("Postcode", 15);
            $table->string("Straat", 40);
            $table->string("Huisnr", 5);
            $table->string("Plaats", 30);
            $table->string("TelefoonNR", 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Klanten');
    }
}
