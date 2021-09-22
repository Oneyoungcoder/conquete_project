<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonneMorale extends Model
{
    use HasFactory;
    protected $fillable = [
        'Raison_Sociale',
        'Nom_du_mandataire',
        'Qualité_du_mandataire',  
    ];
}
