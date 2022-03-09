<?php

namespace App\Providers;

use App\genero;
use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $gen = genero::all();
        View::share('genSh', $gen);
    }

}
