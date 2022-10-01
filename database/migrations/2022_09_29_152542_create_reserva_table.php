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
        Schema::create('reserva', function (Blueprint $table) {
            $table->bigIncrements('nroReserva');
            $table->timestamp('fechaHoraGenerada')->useCurrent();
            $table->boolean('habilitada')->default(true);
            $table->boolean('cancelada')->default(false);
            $table->float('importe');
            $table->timestamp('fechaHoraVencimiento')->useCurrent();
            $table->unsignedBigInteger('idCotizacion');
            $table->unsignedBigInteger('nroPago')->nullable();
            $table->timestamps();
            $table->foreign('idCotizacion')->references('idCotizacion')->on('cotizacion');
            $table->foreign('nroPago')->references('nroPago')->on('pago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
};
