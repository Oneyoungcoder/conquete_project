<?php

namespace App\Http\Controllers;

use App\Models\Personne_morale;

use Illuminate\Http\Request;

class Personne_moraleController extends Controller
{
    public function index()
    {
        $Personne_Morales = Personne_morale::all();
        return view('Personne_Morales.index', ['PersonneMorales' => $Personne_Morales]);
    }

    public function edit(Personne_morale $Personne_Morales)
    {
        return view('Personne_Morales', ['PersonneMorales' => $Personne_Morales]);
    }

    public function update(Personne_morale $Personne_Morales)
    {   
        request()->validate([
            'Raison_sociale' =>'required',
            'Nom_mandataire' => 'required',
            'Qualite_mandataire' => 'required',
        ]);
        $Personne_Morales->update([
            'Raison_sociale' => request('Raison_sociale'),
            'Nom_mandataire' => request('Nom_mandataire'),
            'Qualite_mandataire' => request('Qualite_mandataire'),
            
        ]);
        return redirect('/Personne_morales');
    }

    public function store()
    {  
        request()->validate([
            'Raison_sociale' =>'required',
            'Nom_mandataire' => 'required',
            'Qualite_mandataire' => 'required',
        ]);
        
        Personne_morale::create([
            'Raison_sociale' => request('Raison_sociale'),
            'Nom_mandataire' => request('Nom_mandataire'),
            'Qualite_mandataire' => request('Qualite_mandataire'),
        ]);
        return redirect('/Personne_morales');
    }
}
