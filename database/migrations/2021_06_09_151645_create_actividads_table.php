<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombre_actividad')->nullable();
            $table->integer('valor',3);
            $table->string('estado');
            $table->string('autor')->nullable();

            $table->integer('id_grado')->unsigned();
            $table->foreign('id_grado')->references('id')->on('grados');

            $table->integer('id_docente')->unsigned();
            $table->foreign('id_docente')->references('id')->on('docentes');

            $table->integer('id_ludica')->unsigned();
            $table->foreign('id_ludica')->references('id')->on('ludicas');

            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('id_tipo_l')->unsigned();
            $table->foreign('id_tipo_l')->references('id')->on('tipo_ludicas');

            $table->integer('id_motivaciones')->unsigned();
            $table->foreign('id_motivaciones')->references('id')->on('motivaciones');

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
        Schema::dropIfExists('actividads');
    }
}
