<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opertion extends Model
{
    use HasFactory;
    protected $fillable = [
        'Type_doperation',
        'Motif',
        'Offre',
        'Forfait'
    ];
}
