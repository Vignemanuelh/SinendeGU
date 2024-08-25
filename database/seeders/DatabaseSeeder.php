<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CommuneSeeder::class,
            CategorieRecetteSeeder::class,
            SousCategorieRecetteSeeder::class,
            ContribuableSeeder::class,
            NatureRecetteCommunaleSeeder::class,
            PieceJustificativeSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
//            CategorieRecetteContribuableSeeder::class,
        ]);
        // User::factory(10)->create();


    }
}
