<?php

namespace App\Http\Controllers;

use App\Models\Personne_Physique;

use Illuminate\Http\Request;


class Personne_physiqueController extends Controller
{
    public function index()
    {
        $Personne_Physiques = Personne_Physique::all();
        // dd($Personne_Physiques);
        return view('clients.index', ['personne_physique' => $Personne_Physiques]);
    }

    public function edit(Personne_Physique $Personne_Physique)
    {
        return view('clients.edit', ['personne_physique' => $Personne_Physique]);
    }

    public function create(Personne_Physique $Personne_Physiques)
    {
        return view('clients.create');  
    }

    public function update(Personne_Physique $Personne_Physiques)
    {   
        request()->validate([
            'Nom' =>'required',
            'Prenoms' => 'required',
            'Sexe' => 'required',
            'IFU_physique' => 'required',
        ]);
        $Personne_Physiques->update([
            'Nom' => request('Nom'),
            'Prenoms' => request('Prenoms'),
            'Sexe' => request('Sexe'),
            'IFU_physique' => request('IFU_physique'),
            
        ]);
        return redirect('/clients');
    }

    public function store()
    {  
        request()->validate([
            'Nom' =>'required',
            'Prenoms' => 'required',
            'Sexe' => 'required',
            'IFU_physique' => 'required',
        ]);
        
        Personne_Physique::create([
            'Nom' => request('Nom'),
            'Prenoms' => request('Prenoms'),
            'Sexe' => request('Sexe'),
            'IFU_physique' => request('IFU_physique'),
        ]);
        return redirect('/clients');
    }
}