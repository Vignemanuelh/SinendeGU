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
            SecretariatExecutifSeeder::class,
            CommuneSeeder::class,
            CategorieRecetteSeeder::class,
            SousCategorieRecetteSeeder::class,
            ContribuableSeeder::class,
            PieceJustificativeSeeder::class,
//            AgentCollecteurSeeder::class,
            NatureRecetteCommunaleSeeder::class,
//            ServiceSeeder::class,
            RecouvrirSeeder::class,
            TransmettreSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
//            CategorieRecetteContribuableSeeder::class,
        ]);
        // User::factory(10)->create();


    }
}
