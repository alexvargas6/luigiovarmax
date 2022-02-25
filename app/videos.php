<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    public function getMovie()
    {
        return $this->belongsTo('App\movies', 'movie', 'id');
    }
}
