<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NatureRecetteCommunale;

class NatureRecetteCommunaleSeeder extends Seeder
{
    public function run()
    {
        NatureRecetteCommunale::create([
            'code' => 'NRC001',
            'nom' => 'Contributions foncières des propriétés bâties et non bâties',
            'sous_categorie_recette_id' => 1,
        ]);

        NatureRecetteCommunale::create([
            'code' => 'NRC002',
            'nom' => 'Taxe foncière unique (TFU) dans les communes dotées du « Régime Foncier Urbain (RFU) »',
            'sous_categorie_recette_id' => 1,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC003',
            'nom' => 'Patente et licence',
            'sous_categorie_recette_id' => 1,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC004',
            'nom' => 'Taxe Professionnelle synthétique (TPS)',
            'sous_categorie_recette_id' => 1,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC005',
            'nom' => 'Taxe sur les armes à feu',
            'sous_categorie_recette_id' => 1,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC006',
            'nom' => 'Taxe d’enlèvement des ordures ménagères (TEO)',
            'sous_categorie_recette_id' => 1,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC007',
            'nom' => 'Taxes directes assimilées',
            'sous_categorie_recette_id' => 1,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC008',
            'nom' => 'Taxe de pacage',
            'sous_categorie_recette_id' => 2,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC009',
            'nom' => 'Taxe sur les barques et les pirogues motorisées',
            'sous_categorie_recette_id' => 2,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC010',
            'nom' => 'Taxe sur les spectacles, jeux et divertissements',
            'sous_categorie_recette_id' => 2,
        ]);
         NatureRecetteCommunale::create([
            'code' => 'NRC011',
            'nom' => 'Taxe sur les ventes de boissons fermentées de préparation artisanale',
            'sous_categorie_recette_id' => 2,
        ]);
         NatureRecetteCommunale::create([
            'code' => 'NRC012',
            'nom' => 'Taxe sur la publicité',
            'sous_categorie_recette_id' => 2,
        ]);
         NatureRecetteCommunale::create([
            'code' => 'NRC013',
            'nom' => 'Taxe sur les affiches',
            'sous_categorie_recette_id' => 2,
        ]);
         NatureRecetteCommunale::create([
            'code' => 'NRC014',
            'nom' => 'Taxe sur les taxis de ville (quatre, trois ou deux roues)',
            'sous_categorie_recette_id' => 2,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC015',
            'nom' => 'Taxe de développement local basée sur les principales ressources de la commune (T.D.L)',
            'sous_categorie_recette_id' => 2,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC016',
            'nom' => 'Taxes indirectes assimilées',
            'sous_categorie_recette_id' => 2,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC017',
            'nom' => 'Diverses Taxes locales prévues par le code Général des impôts',
            'sous_categorie_recette_id' => 2,
        ]);

        NatureRecetteCommunale::create([
            'code' => 'NRC018',
            'nom' => 'Taxe touristique prélevée par l’Etat',
            'sous_categorie_recette_id' => 3,
        ]);

        NatureRecetteCommunale::create([
            'code' => 'NRC019',
            'nom' => 'Taxe sur les véhicules à moteur',
            'sous_categorie_recette_id' => 3,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC020',
            'nom' => 'Taxe sur l’exploitation des carrières et mines',
            'sous_categorie_recette_id' => 3,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC021',
            'nom' => 'Taxe de voirie',
            'sous_categorie_recette_id' => 3,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC022',
            'nom' => 'Taxe sur la valeur ajoutée (TVA) perçue au cordon douanier',
            'sous_categorie_recette_id' => 3,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC023',
            'nom' => 'Taxes d’expédition des actes administratifs et des actes de l’état civil, des légalisations de signature et certifications des droits d’expédition de conventions coutumières, des délivrances de divers documents',
            'sous_categorie_recette_id' => 4,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC024',
            'nom' => 'Taxes sur les délivrances des permis d’habiter',
            'sous_categorie_recette_id' => 4,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC025',
            'nom' => 'Amendes prononcées par les tribunaux correctionnels ou de simple police pour les contraventions ou délits commis sur le territoire de la commune',
            'sous_categorie_recette_id' => 4,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC026',
            'nom' => 'Taxe de stationnement sur les gares routières',
            'sous_categorie_recette_id' => 4,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC027',
            'nom' => 'Excédent des produits sur les charges des gares routières et des marchés ou la part revenant à la commune',
            'sous_categorie_recette_id' => 4,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC028',
            'nom' => 'Droits de stationnement et parking',
            'sous_categorie_recette_id' => 4,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC029',
            'nom' => 'Taxes ou redevances pour prestation d’électricité et d’eau',
            'sous_categorie_recette_id' => 4,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC030',
            'nom' => 'Taxes ou redevances en matière d’urbanisme et d’environnement',
            'sous_categorie_recette_id' => 4,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC031',
            'nom' => 'Taxes ou redevances assimilées (Taxe de marché, etc.)',
            'sous_categorie_recette_id' => 4,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC032',
            'nom' => 'Droits de mutations',
            'sous_categorie_recette_id' => 5,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC033',
            'nom' => 'Produit des inhumations et concessions',
            'sous_categorie_recette_id' => 5,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC034',
            'nom' => 'Produits de l’exploitation des carrières de la commune',
            'sous_categorie_recette_id' => 5,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC035',
            'nom' => 'Produits de la location des biens meubles et immeubles de la commune',
            'sous_categorie_recette_id' => 5,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC036',
            'nom' => 'Redevance d’installation d’appâtâmes et hangars par la commune',
            'sous_categorie_recette_id' => 5,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC037',
            'nom' => 'Redevance sur brevets, logiciels, marques et droits similaires',
            'sous_categorie_recette_id' => 5,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC038',
            'nom' => 'Produits des titres et valeurs',
            'sous_categorie_recette_id' => 5,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC039',
            'nom' => 'Redevances pour frais d’enlèvement de débris et matériaux autres que les ordures ménagères',
            'sous_categorie_recette_id' => 6,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC040',
            'nom' => 'Redevance de vidange et de curage',
            'sous_categorie_recette_id' => 6,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC041',
            'nom' => 'Taxes et produits des opérations de désinsectisation',
            'sous_categorie_recette_id' => 6,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC042',
            'nom' => 'Taxes d’inspection sanitaire des produits alimentaires',
            'sous_categorie_recette_id' => 6,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC043',
            'nom' => 'Recettes de prestations et de service d’hygiène et de salubrité publique en matière d’hydraulique et d’adduction d’eau',
            'sous_categorie_recette_id' => 6,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC044',
            'nom' => 'Produits des terrains communaux affectés aux inhumations et des concessions dans les cimetières ou du creusement des fosses',
            'sous_categorie_recette_id' => 6,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC045',
            'nom' => 'Taxes, redevances ou recettes pour service rendu concernant les transports funèbres et autres recettes de prestations et de services funéraires',
            'sous_categorie_recette_id' => 6,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC046',
            'nom' => 'Taxes, redevances ou recettes assimilées',
            'sous_categorie_recette_id' => 6,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC047',
            'nom' => 'Les dividendes',
            'sous_categorie_recette_id' => 7,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC048',
            'nom' => 'Les intérêts et redevances reçus des placements de portefeuille',
            'sous_categorie_recette_id' => 7,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC049',
            'nom' => 'Plus-values réalisées sur la cession d’immobilisation',
            'sous_categorie_recette_id' => 7,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC050',
            'nom' => 'Produits de Subvention ou dotations de fonctionnement accordées par l’Etat',
            'sous_categorie_recette_id' => 8,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC051',
            'nom' => 'Produits de Subventions ou dotations de fonctionnement accordées par toute autre personne physique ou morale',
            'sous_categorie_recette_id' => 8,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC052',
            'nom' => 'Reprise d’amortissement',
            'sous_categorie_recette_id' => 8,
        ]);
        NatureRecetteCommunale::create([
            'code' => 'NRC053',
            'nom' => 'Reprise de subventiond’investissement',
            'sous_categorie_recette_id' => 8,
        ]);

    }
}
