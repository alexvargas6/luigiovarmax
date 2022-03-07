<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivels', function (Blueprint $table) {
            $table->id();
            $table->string('nivel');
            $table->string('titulonivel');
            $table->timestamps();
        });
        $this->postCreate();
    }

    //Default user
    private function postCreate()
    {
        $model = new nivel();
        $model->setAttribute('nivel', "1");
        $model->setAttribute('titulonivel', "ADMIN");
        $model->save();
        $model = new nivel();
        $model->setAttribute('nivel', "2");
        $model->setAttribute('titulonivel', "MOD");
        $model->save();
        $model = new nivel();
        $model->setAttribute('nivel', "3");
        $model->setAttribute('titulonivel', "ESPECTADOR");
        $model->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivels');
    }
}
