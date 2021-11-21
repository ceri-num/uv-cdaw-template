<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class film extends Model
{
    protected $table = "films";
    protected $primaryKey = "id";
    protected $fillable = ['name','director','category','duree','annee','acteur_principale','Description','path' ];
}

