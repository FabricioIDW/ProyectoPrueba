<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('dniCliente');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fechaNacimiento');
            $table->text('direccion');
            $table->string('email');
            $table->unsignedBigInteger('idUsuario')->nullable();
            $table->timestamps();
            $table->foreign('idUsuario')->references('idUsuario')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
