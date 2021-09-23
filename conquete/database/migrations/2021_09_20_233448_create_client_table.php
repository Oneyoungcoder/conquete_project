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
  
            $table->string('Statut');
            $table->unsignedInteger('Id_statut')->nullable()->references('Id_pm')->on('personne_morale');
            $table->string('Telephone');
            $table->string('Adresse');
            $table->string('Email');
            $table->string('Piece');
            $table->string('Boite');
            $table->string('Numero_piece');
            $table->boolean('Exoneration');
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
        Schema::dropIfExists('client');
    }
}
