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
            'fechaInicio' => $this->faker->date(),
            'fechaFin' => $this->faker->date(),
            'descuento' => $this->faker->randomFloat(2, 5, 30)
        ];
    }
}
