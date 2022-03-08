<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'administrar/upload/store',
        'administrar/upload/actor',
        'administrar/upload/actor/pelicula/store',
        'administrar/upload/director',
        'administrar/upload/director/pelicula/store',
        'us/bloquear',
        'us/nivel',
        'us/nivel/store'
    ];
}
