<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategorieRecette;

class CategorieRecetteSeeder extends Seeder
{
    public function run()
    {
        CategorieRecette::create([
            'code' => 'CAT001',
            'nom' => 'Recettes fiscales',
            'commune_id' => 1,
        ]);

        CategorieRecette::create([
            'code' => 'CAT002',
            'nom' => 'Recettes non fiscales',
            'commune_id' => 1,
        ]);
    }
}
