<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonneMoralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne_morales', function (Blueprint $table) {
            $table->id();
            $table->string('Raison_Sociale');
            $table->string('Nom_du_mandataire');
            $table->string('Qualité_du_mandataire');
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
        Schema::dropIfExists('personne_morales');
    }
}
