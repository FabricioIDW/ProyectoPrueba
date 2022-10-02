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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->bigIncrements('idOferta');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->float('descuento', 5, 2);
            $table->timestamps();
            // $table->primary(['idOferta', 'fechaInicio', 'fechaFin', 'descuento']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
};
