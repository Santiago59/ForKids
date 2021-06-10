<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_estudiante');
            $table->string('apellido_estudiante');

            $table->integer('id_grado')->unsigned();
            $table->foreign('id_grado')->references('id')->on('grados');

            $table->integer('id_acudiente')->unsigned();
            $table->foreign('id_acudiente')->references('id')->on('acudientes');

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
        Schema::dropIfExists('estudiantes');
    }
}
