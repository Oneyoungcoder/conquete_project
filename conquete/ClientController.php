<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('index', ['clients' => $clients]);
    }
    
    public function edit(Client $client)
    {
        return view('edit', ['client' => $client]);
    }

    public function update(Client $client)
    {   
        request()->validate([
            'Numero' =>'required',
            'Email' => 'required',
            'Piece' => 'required',
            'Boite' => 'required',
            'Adresse' => 'required',
            'Exoneration' => 'required',
        ]);
        $client->update([
            'Numero' => request('Numero'),
            'Email' => request('Email'),
            'Piece' => request('Piece'),
            'Boite' => request('Boite'),
            'Adresse' => request('Adresse'),
            'Exonération' => request('Exonération')
            
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
            'Exonération' => 'required',
        ]);
        
        Client::create([
            'Numero' => request('Numero'),
            'Email' => request('Email'),
            'Piece' => request('Piece'),
            'Boite' => request('Boite'),
            'Adresse' => request('Adresse'),
            'Exonération' => request('Exonération')
        ]);
        return redirect('/clients');
    }
}
