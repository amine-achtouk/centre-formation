<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inscriptions extends Model
{

    protected $fillable = [
        'stagiaire_id',
        'filiere_id',
        'date_naissance',
        'anne_scolaire',
        'statut',
    ];
}
