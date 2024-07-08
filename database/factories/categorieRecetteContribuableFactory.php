<?php

namespace Database\Factories;

use App\Models\CategorieRecette;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class categorieRecetteContribuableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categorie_recette_id' => CategorieRecette::factory(),
            'contribuable_id' => CategorieRecette::factory(),
        ];
    }
}
