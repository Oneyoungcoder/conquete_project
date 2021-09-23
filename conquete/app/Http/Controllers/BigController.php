<?php

namespace App\Http\Controllers;

use App\Models\Big;
use App\Http\Controllers\Controller;
use App\Models\Personne_Physique;
use App\Models\Personne_morale;
use App\Models\Client;
use App\Models\Operation;
use App\Models\Adresse;
use Illuminate\Http\Request;

use Validator;

class BigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bigs = Big::all();
        return view('index', compact('bigs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [

            'Statut' => 'required',
            'Telephone' => 'required',
            'Email' => 'required',
            'Boite' => 'required',
            'Adresse' => 'required',
            'Piece' => 'required',
            'Numero_identite' => 'required',
            'Exoneration' => 'required',
            
            // Operation info
            'Type_doperation' => 'required',
            'Offre' => 'required',
            'Forfait' => 'required',
            
            // // Adresse
            'Ville' => 'required',
            'Commune' => 'required',
            'Quartier' => 'required',
            'Carre_du_lot' => 'required',
            'Parcelle' => 'required',
            'Boite_Postale' => 'required',
            'GPS' => 'required',
            'Longitude' => 'required',
            'Latitude' => 'required',
            'Batiment' => 'required',
            'Etage' => 'required',
            'Porte' => 'required',
            ]);
            
        $clients = new Client;
        $clients->Statut =$request->Statut;
       
        if ($clients->Statut == "perso") {
            $Personne_p = new Personne_physique;
            $Personne_p->Nom =$request->Nom;
            $Personne_p->Prenom =$request->Prenom;
            $Personne_p->Sexe =$request->Sexe;
            $Personne_p->save(); 
        }
        if ($clients->Statut == "pro") {
            $Personne_m = new Personne_morale;
            $Personne_m->Raison_Sociale =$request->Raison_sociale;
            $Personne_m->Nom_mandataire =$request->Nom_mandataire;
            $Personne_m->Qualite_mandataire =$request->Qualite_mandataire;
            $Personne_m->save(); 
        } 

        if ($clients->Statut == "perso")
            $clients->Id_statut =$Personne_p->id;
        else $clients->Id_statut =$Personne_m->id;
        $clients->Telephone =$request->Telephone;
        $clients->Email =$request->Email;
        $clients->Boite =$request->Boite;
        $clients->Adresse =$request->Adresse;
        $clients->Piece =$request->Piece;
        $clients->Numero_identite =$request->Numero_identite;
        $clients->Exoneration =$request->Exoneration;
        $clients->save(); 

        $ope = new Operation; 
        $ope->Type_doperation =$request->Type_doperation;
        $ope->Motif =$request->Motif ;
        $ope->Offre =$request->Offre ;
        $ope->Forfait =$request->Forfait ;
        $ope->save();

        $dresse = new Adresse;
        $dresse->Ville = $request->Ville;
        $dresse->Commune =$request->Commune;
        $dresse->Quartier =$request->Quartier;
        $dresse->Carre_du_lot =$request->Carre_du_lot;
        $dresse->Parcelle =$request->Parcelle;
        $dresse->Boite_Postale =$request->Boite_Postale;
        $dresse->GPS =$request->GPS;
        $dresse->Longitude =$request->Longitude;
        $dresse->Latitude =$request->Latitude;
        $dresse->Batiment =$request->Batiment;
        $dresse->Etage =$request->Etage;
        $dresse->Porte =$request->Porte;
        $dresse->save();

        $boss = new Big;
        if ($clients->Statut == "perso")
            $boss->Name =$Personne_p->Nom." ".$Personne_p->Prenom;
        else $boss->Name = $Personne_m->Raison_Sociale;
        $boss->Telephone = $clients->Telephone;
        $boss->Offre = $ope->Offre;
        $boss->Forfait = $ope->Forfait;
        $boss->Adresse = $clients->Adresse;
        $boss->save();

        return redirect('index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Big  $big
     * @return \Illuminate\Http\Response
     */
    public function show(Big $big)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Big  $big
     * @return \Illuminate\Http\Response
     */
    public function edit(Big $big)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Big  $big
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Big $big)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Big  $big
     * @return \Illuminate\Http\Response
     */
    public function destroy(Big $big)
    {
        //
    }
}
