<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actores_movie extends Model
{
    public function getActor()
    {
        return $this->belongsTo(actores::class, 'idactor', 'id');
    }
}
