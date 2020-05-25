<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_medicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreCompleto');
            $table->string('numeroIdentificacion')->unique();
            $table->string('correoElectronico');
            $table->string('numeroContacto');
            $table->bigInteger('especialidad_id')->unsigned();
            $table->foreign('especialidad_id')->references('id')->on('especialidades');
            $table->string('registroMedico');
            $table->string('experiencia');
            $table->string('titulosObtenidos');
            $table->string('disponibilidad');
            $table->boolean('activo');
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
        Schema::dropIfExists('registro_medicos');
    }
}
