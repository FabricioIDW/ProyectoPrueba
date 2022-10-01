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
        Schema::create('vehiculo_accesorio', function (Blueprint $table) {
            $table->unsignedBigInteger('idVehiculo')->unique();
            $table->unsignedBigInteger('idAccesorio')->unique();
            $table->float('precio');
            $table->timestamps();
            $table->foreign('idVehiculo')->references('idVehiculo')->on('vehiculo');
            $table->foreign('idAccesorio')->references('idAccesorio')->on('accesorio');
            $table->index(['idVehiculo', 'idAccesorio']);
            // $table->unique('idVehiculo', 'idAccesorio', 'VA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo_accesorio');
    }
};
