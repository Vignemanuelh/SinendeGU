<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\NatureRecetteCommunale;
use App\Models\Service;
use App\Models\Contribuable;
use App\Models\CategorieRecette;
use App\Models\SousCategorieRecette;

class NatureRecetteCommunaleFactory extends Factory
{
    protected $model = NatureRecetteCommunale::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numerify('NRC-#####'),
            'nom' => $this->faker->word,
            'tarif' => $this->faker->randomFloat(2, 10, 1000),
            'montant_estime' => $this->faker->randomFloat(2, 100, 10000),
            'montant_recouvre' => $this->faker->randomFloat(2, 100, 10000),
            'taux_recouvrement' => $this->faker->randomFloat(2, 0, 100),
            'preuve' => $this->faker->optional()->imageUrl,
            'fichiers' => $this->faker->optional()->imageUrl,
            'sous_categorie_recette_id' => SousCategorieRecette::factory(),
        ];
    }
}
