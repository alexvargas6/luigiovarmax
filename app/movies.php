<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    public function getGeneros()
    {
        return $this->hasMany('App\genero_movie', 'idmovie', 'id');
    }
}
