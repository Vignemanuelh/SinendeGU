<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SousCategorieRecette;
use App\Models\Service;
use App\Models\CategorieRecette;

class SousCategorieRecetteFactory extends Factory
{
    protected $model = SousCategorieRecette::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numerify('SCR-#####'),
            'nom' => $this->faker->word,
            'montant_estime' => $this->faker->randomFloat(2, 100, 10000),
            'montant_recouvre' => $this->faker->randomFloat(2, 100, 10000),
            'taux_recouvrement' => $this->faker->randomFloat(2, 0, 100),
            'categorie_recette_id' => CategorieRecette::factory(),
        ];
    }
}
