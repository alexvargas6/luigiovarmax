<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Auth\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('foto');
            $table->string('email')->unique();
            $table->foreignId('nivel')->constrained('nivels')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('bloqueado');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        $this->postCreate();
    }

    //Default user
    private function postCreate()
    {
        $model = new User();
        $model->setAttribute('name', "admin");
        $model->setAttribute('email', "admin@gmail.com");
        $model->setAttribute('password', Hash::make("admin123"));
        $model->setAttribute('nivel', 1);
        $model->setAttribute('bloqueado', 0);
        $model->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
