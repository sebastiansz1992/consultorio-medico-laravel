<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas_medicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nombreMedico_id')->unsigned();
            $table->foreign('nombreMedico_id')->references('id')->on('registro_medicos');
            $table->bigInteger('especialidad_id')->unsigned();
            $table->foreign('especialidad_id')->references('id')->on('especialidades');
            $table->bigInteger('nombreUsuario_id')->unsigned();
            $table->foreign('nombreUsuario_id')->references('id')->on('registro_usuarios');
            $table->string('numeroIdentificacion')->unique();
            $table->string('correoElectronico');
            $table->string('dia');
            $table->string('mes');
            $table->string('hora');
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
        Schema::dropIfExists('citas_medicas');
    }
}
