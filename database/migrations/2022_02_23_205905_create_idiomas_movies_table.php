<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdiomasMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idiomas_movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idmovie')->constrained('movies'); 
            $table->foreignId('idioma')->constrained('idiomas'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('idiomas_movies');
    }
}
