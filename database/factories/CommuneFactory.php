<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commune;

class CommuneFactory extends Factory
{
    protected $model = Commune::class;

    public function definition()
    {
        return [
            'num_compte' => $this->faker->bankAccountNumber,
            'departement' => $this->faker->state,
            'nom' => $this->faker->city,
            'statut' => $this->faker->word,
            'superficie' => $this->faker->randomFloat(2, 10, 1000),
            'population' => $this->faker->numberBetween(1000, 1000000),
        ];
    }
}
