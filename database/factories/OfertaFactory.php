<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Oferta;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Oferta>
 */
class OfertaFactory extends Factory
{
    protected $model = Oferta::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'descuento' => $this->faker->randomFloat(2, 5, 30),
            'fechaInicio' => $this->faker->date(),
            'fechaFin' => $this->faker->date(),
        ];
    }
    // public function definition()
    // {
    //     $descuento = $this->faker->randomFloat(2, 5, 30);
    //     $fechaInicio = $this->faker->date();
    //     $fechaFin = $this->faker->date();
    //     $slug = $descuento . ' ' . $fechaInicio . ' ' . $fechaFin;
    //     return [
    //         'descuento' => $descuento,
    //         'fechaInicio' => $fechaInicio,
    //         'fechaFin' => $fechaFin,
    //         'slug' => Str::slug($slug, '-'),
    //     ];
    // }
}
