<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->bigIncrements('id_control');

            $table->unsignedBigInteger('id_estudiante');
            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');

            $table->unsignedBigInteger('id_profesor');
            $table->foreign('id_profesor')->references('id_profesor')->on('profesores');

            $table->unsignedBigInteger('id_asistencia');
            $table->foreign('id_asistencia')->references('id_asistencia')->on('asistencias');

            $table->unsignedBigInteger('id_excusa');
            $table->foreign('id_excusa')->references('id_excusa')->on('excusas');

            $table->unsignedBigInteger('id_falla');
            $table->foreign('id_falla')->references('id_falla')->on('fallas');

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
        Schema::dropIfExists('controls');
    }
}
