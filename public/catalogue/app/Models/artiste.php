<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artiste extends Model
{
    use HasFactory;
}

function medias(){

        return $this->belongsToMany(media::class);
   
}
