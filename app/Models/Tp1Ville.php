<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tp1Ville extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'user_id'
    ];


}
