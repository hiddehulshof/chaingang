<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fietsen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bikes', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('prijs');
            $table->decimal('aanbiedingsprijs');
            $table->string('naam', 255);
            $table->string('merk', 255);
            $table->unsignedInteger('typeId');
            $table->text('omschrijving');
            $table->dateTime('additionDate');
            $table->boolean('forSale');
            $table->string('kleur', 10);
            $table->unsignedInteger('versnellingen');
            $table->boolean('bagagedrager');

            // Fietsen is afhankelijk van catagorie. Fiets wordt verwijderd,
            // Dan intresseert het catagorie niet. Als catagorie wordt verwijderd,
            // Dan vervietigd alle fietsen in die catagorie zichzelf.
            $table->foreign('typeId')->references('id')->on('BikeCategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bikes');
    }
}
