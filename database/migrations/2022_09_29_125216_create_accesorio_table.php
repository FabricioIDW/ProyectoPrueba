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
        Schema::create('accesorio', function (Blueprint $table) {
            $table->bigIncrements('idAccesorio');
            $table->string('nombre');
            $table->integer('stock');
            $table->text('descripcion');
            $table->text('imagen');
            $table->boolean('habilitado')->default(true);
            $table->boolean('eliminado')->default(false);
            $table->unsignedBigInteger('idOferta')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('accesorio');
    }
};
