<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    public function getMovies()
    {
        return $this->hasMany('App\genero_movie', 'id', 'idgenero');
    }
}
