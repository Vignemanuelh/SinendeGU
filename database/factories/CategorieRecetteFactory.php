<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CategorieRecette;
use App\Models\Commune;

class CategorieRecetteFactory extends Factory
{
    protected $model = CategorieRecette::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numerify('CAT-#####'),
            'nom' => $this->faker->word,
            'montant_estime' => $this->faker->randomFloat(2, 100, 10000),
            'montant_recouvre' => $this->faker->randomFloat(2, 100, 10000),
            'taux_recouvrement' => $this->faker->randomFloat(2, 0, 100),
            'col1' => $this->faker->word,
            'commune_id' => Commune::factory(),
        ];
    }
}
