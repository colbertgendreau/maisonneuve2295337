<?php

namespace Database\Factories;


use App\Models\Tp1Etudiant;
use App\Models\Tp1Ville;

use Illuminate\Database\Eloquent\Factories\Factory;

class Tp1EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'adresse' => $this->faker->streetAddress(),
            'phone' => $this->faker->numerify('###-###-####'),
            'email' => $this->faker->unique()->safeEmail(),
            'date_de_naissance' => $this->faker->date($format = 'Y-m-d', $max = '2005-01-01'),
            'ville_id' => $this->faker->numberBetween(1, 15),
        ];
    }
}
