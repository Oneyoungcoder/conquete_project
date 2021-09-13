<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnePhysiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne__physiques', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenoms');
            $table->string('Sexe');
            $table->string('IFU_physique');
            $table->primary('IFU_physique');
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
        Schema::dropIfExists('personne__physiques');
    }
}
