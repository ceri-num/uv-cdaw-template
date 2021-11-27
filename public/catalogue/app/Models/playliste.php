<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playliste extends Model
{
    use HasFactory;
}
 function utilisateurs()
{
    return $this->belongsToMany(Utilisateur::class);
    return $this->belongsToMany(Utilisateur::class);
}
