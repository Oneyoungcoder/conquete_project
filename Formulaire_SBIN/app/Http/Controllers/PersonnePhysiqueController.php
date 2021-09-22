<?php

namespace App\Http\Controllers;

use App\Models\PersonnePhysique;
use Illuminate\Http\Request;

class PersonnePhysiqueController extends Controller
{
    public function index()
    {
        $physiques = PersonnePhysique::all();
        return view('physiques.index', ['physique' => $physiques]);
    }

    public function edit(PersonnePhysique $physique)
    {
        return view('physiques.edit', ['physique' => $physique]);
    }

    public function create()
    {
        return view('physiques.create');  
    }

    public function update(PersonnePhysique $physiques)
    {   
        request()->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Sexe' => 'required',
        ]);

        $physiques->update([
            'Nom' => request('Nom'),
            'Prenom' => request('Prenom'),
            'Sexe' => request('Sexe'),
        ]);
        
        return redirect('/physiques')
        -> with('succes', 'Physique updated successfully');
    }

    public function store()
    {  
        request()->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Sexe' => 'required',
        ]);
        
        PersonnePhysique::create([
            'Nom' => request('Nom'),
            'Prenom' => request('Prenom'),
            'Sexe' => request('Sexe'),
        ]);
        return redirect('/physiques');
    }

    public function destroy(PersonnePhysique $physiques)
    {
        $physiques->delete();
        return redirect('/physiques')
        ->with('success', 'physique deleted successfully');
    }
}
