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
        Schema::create('accesorios', function (Blueprint $table) {
            $table->bigIncrements('idAccesorio');
            $table->unsignedBigInteger('idOferta')->nullable();
            $table->string('nombre')->unique();
            $table->integer('stock');
            $table->text('descripcion');
            $table->text('imagen');
            $table->boolean('habilitado')->default(true);
            $table->boolean('eliminado')->default(false);
            $table->timestamps();
            $table->foreign('idOferta')->references('idOferta')->on('ofertas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesorios');
    }
};
