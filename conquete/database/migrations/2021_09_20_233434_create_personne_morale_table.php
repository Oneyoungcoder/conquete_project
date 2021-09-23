<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonneMoraleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne_morale', function (Blueprint $table) {
            $table->bigIncrements('Id_pm');
            $table->string('Raison_sociale');
            $table->string('Nom_mandataire');
            $table->string('Qualite_mandataire');
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
        Schema::dropIfExists('personne_morale');
    }
}
