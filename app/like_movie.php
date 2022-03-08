<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like_movie extends Model
{
    public function getMovie()
    {
        return $this->belongsTo('App\movies', 'idmovie', 'id');
    }
}
