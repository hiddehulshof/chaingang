<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gebruikers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gebruikers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voornaam', 50);
            $table->string('achternaam', 50);
            $table->string('tussenvoegsel', 20);
            $table->string('email', 50);
            $table->string('gebruikersnaam', 50);
            $table->string('wachtwoord', 50);
            $table->boolean('admin');
            $table->string('telefoonNr', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Gebruikers');
    }
}
