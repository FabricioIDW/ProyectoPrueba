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
        Schema::create('cotizacion', function (Blueprint $table) {
            $table->bigIncrements('idCotizacion');
            $table->timestamp('fechaHoraGenerada')->useCurrent();
            $table->timestamp('fechaHoraVencimiento')->useCurrent();
            $table->float('importeFinal');
            $table->boolean('valida')->default(true);
            $table->unsignedBigInteger('dniCliente');
            $table->timestamps();
            $table->foreign('dniCliente')->references('dniCliente')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacion');
    }
};
