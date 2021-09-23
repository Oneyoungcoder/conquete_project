<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'Statut',
        'Id_statut',
        'Telephone',
        'Email',
        'Piece',
        'Numro_piece',
        'Boite',
        'Adresse',
        'Exonération',
    ];
}