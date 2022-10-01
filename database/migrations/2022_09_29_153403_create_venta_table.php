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
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('nroVenta');
            $table->timestamp('fechaHoraGenerada')->useCurrent();
            $table->boolean('concretada')->default(true);
            $table->float('comision');
            $table->unsignedBigInteger('nroPago')->nullable();
            $table->unsignedBigInteger('idCotizacion');
            $table->unsignedBigInteger('dniVendedor')->nullable();
            $table->timestamps();
            $table->foreign('nroPago')->references('nroPago')->on('pago');
            $table->foreign('idCotizacion')->references('idCotizacion')->on('cotizacion');
            $table->foreign('dniVendedor')->references('dniVendedor')->on('vendedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
};
