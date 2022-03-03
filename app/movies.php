<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    public function getGeneros()
    {
        return $this->hasMany('App\genero_movie', 'idmovie', 'id');
    }

    public function getFotos()
    {
        return $this->hasMany('App\imagene', 'idmovie', 'id');
    }

    public function getVideos()
    {
        return $this->hasMany('App\videos', 'movie', 'id');
    }

    public function getActores()
    {
        return $this->hasMany('App\actores_movie', 'idmovie', 'id');
    }

    public function getAllCalificaciones()
    {
        return $this->hasMany('App\calificacion_movie', 'movie', 'id');
    }
}
