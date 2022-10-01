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
        Schema::create('vendedor', function (Blueprint $table) {
            $table->bigIncrements('dniVendedor');
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('idUsuario');
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
        Schema::dropIfExists('vendedor');
    }
};
