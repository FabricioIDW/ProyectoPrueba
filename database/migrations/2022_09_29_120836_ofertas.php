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
            $table->bigIncrements('id');
            $table->float('descuento', 5, 2);
            $table->date('fechaInicio');
            $table->date('fechaFin');
            // $table->string('slug'); //para url amigable
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
