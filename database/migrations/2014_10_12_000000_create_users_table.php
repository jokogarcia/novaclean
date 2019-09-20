<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default("cambiame");
            $table->string('last_name')->default("");
            $table->string('dni');
            $table->string('phone')->default("");;
            $table->string('photo_url')->default("noPhoto.png");
            $table->string('home_address')->default("");
            $table->bigInteger('cuit')->unique();
            $table->string('gender')->default("");
            $table->string('nationality')->default("AR");
            $table->integer('localidad_id')->default(0);
            $table->integer('cv_id')->default(0);
            $table->integer('user_class_id')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
