<?php

namespace Database\Seeders;

use App\Models\CategorieRecetteContribuable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieRecetteContribuableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategorieRecetteContribuable::factory()->count(2)->create();
    }
}
