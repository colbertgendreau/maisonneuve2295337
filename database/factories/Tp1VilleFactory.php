<?php

namespace Database\Factories;

// use App\Models\Tp1Ville;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'nom'=>$this->faker->city(),
        ];
    }
}
