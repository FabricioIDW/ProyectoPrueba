<?php

namespace Database\Seeders;

use App\Models\Oferta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Antes de laravel 8
        // $oferta = new Oferta();
        // $oferta->fechaInicio = "2022-10-01";
        // $oferta->fechaFin = "2022-10-04";
        // $oferta->descuento = 4;
        // $oferta->save();

        // Con factory
        // Oferta::factory(10)->create();
    }
}
