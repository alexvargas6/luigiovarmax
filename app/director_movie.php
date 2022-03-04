<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class director_movie extends Model
{
    public function getDir()
    {
        return $this->belongsTo('App\director', 'iddirector', 'id');
    }
}
