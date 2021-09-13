<?php

namespace App\Http\Controllers;

use App\Models\Personne_Morales;

use Illuminate\Http\Request;

class Personnes_MoraleController extends Controller
{
    public function index()
    {
        $Personne_Morales= PersonneMorales::all();
        return view('Personne_Morales.index', ['PersonneMorales' => $Personne_Morales]);
    }

    public function edit(PersonneMorales $Personne_Morales)
    {
        return view('Personne_Morales', ['PersonneMorales' => $Personne_Morales]);
    }
}
