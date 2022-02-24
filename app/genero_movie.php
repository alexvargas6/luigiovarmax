<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero_movie extends Model
{
    public function getGenero()
    {
        return $this->belongsTo('App\genero', 'idgenero', 'id');
    }

    public function getMovie()
    {
        return $this->belongsTo('App\genero', 'idmovie', 'id');
    }
}
