<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne_Physique extends Model
{
    use HasFactory;
    protected $fillable = [
    'Nom',
    'Prenoms',
    'Sexe',
    'IFU_physique' ];
}
