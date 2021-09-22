<?php

namespace App\Http\Controllers;

use App\Models\PersonneMorale;
use App\Models\PersonnePhysique;
use Illuminate\Http\Request;

class PersonneMoraleController extends Controller
{
    public function index_M()
    {
        $morales= PersonneMorale::all();
        return view('physiques.index', ['morale' => $morales]);
    }

    public function edit_M(PersonneMorale $morale)
    {
        return view('physiques.edit', ['morale' => $morale]);
    }

    public function create_M()
    {
        return view('physiques.create');  
    }

    public function update_M(PersonneMorale $morale)
    {   
        request()->validate([
            'Raison_Sociale' =>'required',
            'Nom_du_mandataire' =>'required',
            'Qualité_du_mandataire' =>'required',
        ]);

        $morale->update([
            'Raison_Sociale' => request('Raison_Sociale'),
            'Nom_du_mandataire' => request('Nom_du_mandataire'),
            'Qualité_du_mandataire' => request('Qualité_du_mandataire'),
        ]);
        
        return redirect('/physiques');
    }

    public function store_M()
    {  
        request()->validate([
            'Raison_Sociale' =>'required',
            'Nom_du_mandataire' =>'required',
            'Qualité_du_mandataire' =>'required',
        ]);
        
        PersonneMorale::create([
            'Raison_Sociale' => request('Raison_Sociale'),
            'Nom_du_mandataire' => request('Nom_du_mandataire'),
            'Qualité_du_mandataire' => request('Qualité_du_mandataire'),
        ]);
        return redirect('/physiques');
    }

    public function destroy(PersonneMorale $morales)
    {
        $morales->delete();
        return redirect('/physiques')
        ->with('success', 'morale deleted successfully');
    }
}
