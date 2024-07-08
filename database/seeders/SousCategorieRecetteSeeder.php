<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SousCategorieRecette;

class SousCategorieRecetteSeeder extends Seeder
{
    public function run()
    {
        SousCategorieRecette::factory()->count(3)->create();
    }
}
