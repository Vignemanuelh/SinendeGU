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
        ];
    }
}
