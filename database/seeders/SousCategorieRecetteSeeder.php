<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SousCategorieRecette;

class SousCategorieRecetteSeeder extends Seeder
{
    public function run()
    {
        SousCategorieRecette::create([
            'code' => 'SCAT001',
            'nom' => 'Produit des impôts directs',
            'montant_estime' => 500.00,
            'montant_recouvre' => 450.00,
            'taux_recouvrement' => 90.00,
            'categorie_recette_id' => 1,
        ]);

        SousCategorieRecette::create([
            'code' => 'SCAT002',
            'nom' => 'Produits des impôts Indirects et Taxes locales',
            'montant_estime' => 1500.00,
            'montant_recouvre' => 1350.00,
            'taux_recouvrement' => 90.00,
            'categorie_recette_id' => 1,
        ]);
         SousCategorieRecette::create([
            'code' => 'SCAT002',
            'nom' => ' Produits des ristournes de l’Etat comprenant la part revenant à la commune',
            'montant_estime' => 1500.00,
            'montant_recouvre' => 1350.00,
            'taux_recouvrement' => 90.00,
            'categorie_recette_id' => 1,
        ]);
         SousCategorieRecette::create([
            'code' => 'SCAT002',
            'nom' => 'Recettes des prestations et services de la commune',
            'montant_estime' => 1500.00,
            'montant_recouvre' => 1350.00,
            'taux_recouvrement' => 90.00,
            'categorie_recette_id' => 2,
        ]);
         SousCategorieRecette::create([
            'code' => 'SCAT002',
            'nom' => 'Produits du patrimoine et des activités',
            'montant_estime' => 1500.00,
            'montant_recouvre' => 1350.00,
            'taux_recouvrement' => 90.00,
            'categorie_recette_id' => 2,
        ]);
        SousCategorieRecette::create([
            'code' => 'SCAT002',
            'nom' => 'Taxes et redevances relatives aux services d’hygiène, de salubrité publique et de services funéraires',
            'montant_estime' => 1500.00,
            'montant_recouvre' => 1350.00,
            'taux_recouvrement' => 90.00,
            'categorie_recette_id' => 2,
        ]);
        SousCategorieRecette::create([
            'code' => 'SCAT002',
            'nom' => 'Revenu de portefeuille',
            'montant_estime' => 1500.00,
            'montant_recouvre' => 1350.00,
            'taux_recouvrement' => 90.00,
            'categorie_recette_id' => 2,
        ]);

        SousCategorieRecette::create([
            'code' => 'SCAT002',
            'nom' => 'Autres recettes non fiscales de la section de fonctionnement',
            'montant_estime' => 1500.00,
            'montant_recouvre' => 1350.00,
            'taux_recouvrement' => 90.00,
            'categorie_recette_id' => 2,
        ]);

    }
}
