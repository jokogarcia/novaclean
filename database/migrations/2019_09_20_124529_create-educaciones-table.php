<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_institucion');
            $table->integer('nivel');
            $table->string('carrera');
            $table->float('porcentaje_completado');
            $table->date('fecha_inicio');
            $table->integer('fecha_egreso');
            $table->float('promedio');
            $table->boolean('cursando');

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
        Schema::dropIfExists('educaciones');
    }
}
