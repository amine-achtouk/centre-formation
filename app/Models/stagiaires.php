<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stagiaires extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'date_naissance',
        'photo',
    ];
}
