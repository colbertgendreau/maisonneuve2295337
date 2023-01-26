<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tp1Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'email',
        'phone',
        'date_de_naissance',
        'ville_id',
        'user_id'
    ];

}
