<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contribuable;

class ContribuableFactory extends Factory
{
    protected $model = Contribuable::class;

    public function definition()
    {
        return [
            'identifiant' => $this->faker->unique()->numerify('CTB-#####'),
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'date_naissance' => $this->faker->date,
            'npi' => $this->faker->unique()->numerify('NPI-#####'),
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->phoneNumber,
            'activite' => $this->faker->jobTitle,
            'arrondissement' => $this->faker->city,
            'quartier' => $this->faker->streetName,
            'maison' => $this->faker->buildingNumber,
        ];
    }
}
