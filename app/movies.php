<?php

namespace App;

use DB;
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

    public function getAlldir()
    {
        return $this->hasMany('App\director_movie', 'idmovie', 'id');
    }

    public function promedioCal($id)
    {
        //$consulta = "SELECT avg(calificacion) as prom FROM calificacion_movies where movie = 462;"
        $promedio = DB::table('calificacion_movies')->select(DB::raw('avg(calificacion) as prom'))->where('movie', '=', $id)->get();
        $json =  json_encode($promedio);
        foreach ($promedio as $prom)
            return floatval($prom->prom);
    }
}
