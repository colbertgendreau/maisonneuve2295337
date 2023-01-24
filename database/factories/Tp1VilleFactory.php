<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tp1Ville;

class Tp1VilleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->city, //Generates a fake city
            'ville_id' => Tp1Ville::factory() //Generates a Ville from factory and extracts id
        ];
    }
}
