<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario')->constrained('users');
            $table->foreignId('movie')->constrained('movies');
            $table->string('comentario')->nullable();
            $table->string('titulo')->nullable();;
            $table->integer('calificacion');
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
        Schema::dropIfExists('calificacion_movies');
    }
}
