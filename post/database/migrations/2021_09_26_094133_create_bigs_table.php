<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bigs', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Motif')->nullable();
            $table->string('Offre');
            $table->string('Forfait');
            $table->string('Type_doperation');
            $table->string('Raison_sociale')->nullable();
            $table->string('Nom_mandataire')->nullable();
            $table->string('Qualite_mandataire')->nullable();
            $table->string('Nom')->nullable();
            $table->string('Prenom')->nullable();
            $table->string('Sexe')->nullable();
            $table->string('Statut');
            $table->string('Telephone');
            $table->string('Email');
            $table->string('Piece');
            $table->string('Boite');
            $table->string('Numero_identite');
            $table->boolean('Exoneration');
            $table->string('Commune');
            $table->string('Quartier');
            $table->string('Carre_du_lot');
            $table->string('Boite_Postale'); 
            $table->string('GPS');
            $table->string('Longitude');
            $table->string('Latitude');
            $table->string('Batiment'); 
            $table->string('Etage');
            $table->string('Adresse');
            $table->string('Porte');
            $table->string('Ville');
            $table->string('Parcelle');
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
        Schema::dropIfExists('bigs');
    }
}
