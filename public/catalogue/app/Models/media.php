<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    protected $table = "media";
    protected $primaryKey = "id";
    protected $fillable = ['name','director','category','duree','annee','acteur_principale','Description','path' ];
}


function artistes(){

    return $this->belongsToMany(artiste::class);

}
