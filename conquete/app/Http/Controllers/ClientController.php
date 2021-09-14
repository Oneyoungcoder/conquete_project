<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $Clients = Client::all();
        return view('index', ['clients' => $Clients]);
    }
    
    public function edit(Client $Client)
    {
        return view('edit', ['client' => $Client]);
    }

    public function update(Client $Client)
    {   
        request()->validate([
            'Numero' =>'required',
            'Email' => 'required',
            'Piece' => 'required',
            'Boite' => 'required',
            'Adresse' => 'required',
            'Exoneration' => 'required',
        ]);
        $Client->update([
            'Numero' => request('Numero'),
            'Email' => request('Email'),
            'Piece' => request('Piece'),
            'Boite' => request('Boite'),
            'Adresse' => request('Adresse'),
            'Exoneration' => request('Exonération')
            
        ]);
        return redirect('/clients');
    }

    public function store()
    {  
        request()->validate([
            'Numero' =>'required',
            'Email' => 'required',
            'Piece' => 'required',
            'Boite' => 'required',
            'Adresse' => 'required',
            'Exoneration' => 'required',
        ]);
        
        Client::create([
            'Numero' => request('Numero'),
            'Email' => request('Email'),
            'Piece' => request('Piece'),
            'Boite' => request('Boite'),
            'Adresse' => request('Adresse'),
            'Exoneration' => request('Exonération')
        ]);
        return redirect('/clients');
    }
}
