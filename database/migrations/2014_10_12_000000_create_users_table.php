<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string("Voornaam", 50)->nullable();
            $table->string("Achternaam", 50)->nullable();
            $table->string("Tussenvoegsel", 20)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("Postcode", 15)->nullable();
            $table->string("Straat", 40)->nullable();
            $table->string("Huisnr", 5)->nullable();
            $table->string("Plaats", 30)->nullable();
            $table->string("TelefoonNR", 20)->nullable();
            $table->boolean("isEmployee")->nullable();
            $table->boolean("isAdmin")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
