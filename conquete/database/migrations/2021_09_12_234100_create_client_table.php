<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Email');
            $table->string('Pièce identité');
            $table->string('Boîte Postal');
            $table->string('Adresse');
            $table->boolean('Exonération');
            $table->string('IFU');
            $table->foreign('IFU')->references('IFU_physique')->on('personne__physiques');
            $table->foreign('IFU')->references('IFU_morale')->on('personne__morales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
