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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idModelo');
            $table->unsignedBigInteger('idOferta');
            $table->float('precio');
            $table->text('descripcion');
            $table->integer('anio');
            $table->string('nroChasis', 17)->unique();
            $table->text('imagen');
            $table->boolean('habilitado')->default(true);
            $table->boolean('reservado')->default(false);
            $table->boolean('eliminado')->default(false);
            $table->timestamps();
            $table->foreign('idModelo')->references('id')->on('modelos');
            $table->foreign('idOferta')->references('id')->on('ofertas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
};
