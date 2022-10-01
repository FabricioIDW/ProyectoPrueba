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
        Schema::create('cotizacion_vehiculo_accesorio', function (Blueprint $table) {
            $table->unsignedBigInteger('idCotizacion')->nullable();
            $table->unsignedBigInteger('idVehiculo')->nullable();
            $table->unsignedBigInteger('idAccesorio')->nullable();
            $table->boolean('habilitado')->default(true);
            $table->boolean('reservado')->default(true);
            $table->boolean('vendido')->default(false);
            $table->timestamps();
            $table->foreign('idCotizacion')->references('idCotizacion')->on('cotizacion');
            $table->foreign('idVehiculo')->references('idVehiculo')->on('vehiculo');
            $table->foreign('idAccesorio')->references('idAccesorio')->on('accesorio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacion_vehiculo_accesorio');
    }
};
