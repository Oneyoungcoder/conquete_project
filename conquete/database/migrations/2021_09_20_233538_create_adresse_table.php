<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresse', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Id_client');
            
            $table->foreign('Id_client')->references('id')->on('client');

            $table->string('Commune');
            $table->string('Quartier');
            $table->string('Carre_du_lot');
            $table->string('Boite_Postale'); 
            $table->string('GPS');
            $table->string('Longitude');
            $table->string('Latitude');
            $table->string('Batiment'); 
            $table->string('Etage');
            $table->string('Porte');
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
        Schema::dropIfExists('adresse');
    }
}
