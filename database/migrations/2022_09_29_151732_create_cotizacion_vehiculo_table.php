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
        Schema::create('cotizacion_vehiculo', function (Blueprint $table) {
            $table->unsignedBigInteger('idCotizacion')->nullable();
            $table->unsignedBigInteger('idVehiculo')->nullable();
            $table->timestamps();
            $table->foreign('idCotizacion')->references('idCotizacion')->on('cotizacion');
            $table->foreign('idVehiculo')->references('idVehiculo')->on('vehiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacion_vehiculo');
    }
};
