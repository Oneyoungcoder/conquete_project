<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personne_Physiques;

class Personnes_PhysiqueController extends Controller
{
    public function index()
    {
        $Personne_Physiques= PersonnePhysiques::all();
        return view('Personne_Physiques.index', ['PersonnePhysiques' => $Personne_Physiques]);
    }

    public function edit(PersonnePhysiques $Personne_Physiques)
    {
        return view('Personne_Physiques.edit', ['PersonnePhysiques' => $Personne_Physiques]);
    }
}