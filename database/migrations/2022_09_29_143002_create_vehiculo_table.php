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
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->bigIncrements('idVehiculo');
            $table->float('precio');
            $table->text('descripcion');
            $table->boolean('habilitado')->default(true);
            $table->boolean('reservado')->default(false);
            $table->boolean('vendido')->default(false);
            $table->string('modelo');
            $table->integer('anio');
            $table->text('nroChasis');
            $table->boolean('eliminado')->default(false);
            $table->text('imagen');
            $table->unsignedBigInteger('idMarca');
            $table->unsignedBigInteger('idOferta')->nullable();
            $table->timestamps();
            $table->foreign('idMarca')->references('idMarca')->on('marca');
            $table->foreign('idOferta')->references('idOferta')->on('oferta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo');
    }
};
