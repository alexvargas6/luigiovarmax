<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class calificacion_movie extends Model
{
    public static function mejorCalificadas()
    {
        $videos = DB::table('calificacion_movies')
            ->select(DB::raw('*, avg(calificacion) as promedio'))
            ->join('movies', 'movies.id', '=', 'calificacion_movies.movie')
            ->groupBy('calificacion_movies.movie')
            ->orderByDesc('promedio')
            ->limit(9)
            ->get();
        /*$consulta = "SELECT *, avg(calificacion) calificacion
        FROM calificacion_movies as cm
        inner join movies as m on m.id=cm.movie
        GROUP BY cm.movie
        order by cm.calificacion DESC LIMIT 9;";*/
        //$resp = DB::select($consulta)->get();
        return  $videos;
    }

    public function getMovie()
    {
        return $this->belongsTo('App\genero', 'movie', 'id');
    }

    public function getMovieQ($id)
    {
        $consulta = "SELECT * FROM movies WHERE id =" . $id . ";";
        $resp = DB::select($consulta);
        return $resp;
    }

    public function getUsuario()
    {
        return $this->belongsTo('App\User', 'usuario', 'id');
    }
}
