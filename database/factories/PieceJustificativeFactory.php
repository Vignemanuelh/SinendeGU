<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PieceJustificative;

class PieceJustificativeFactory extends Factory
{
    protected $model = PieceJustificative::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numerify('PJ-#####'),
            'nom' => $this->faker->word,
            'nature_recette_communale_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
