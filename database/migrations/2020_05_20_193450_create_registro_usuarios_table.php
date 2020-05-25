<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreCompleto');
            $table->string('numeroIdentificacion')->unique();
            $table->string('correoElectronico');
            $table->string('numeroContacto');
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
        Schema::dropIfExists('registro_usuarios');
    }
}
