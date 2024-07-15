<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Liste des recettes non fiscales',
            'taux/tarif/montant de chaque nature de recettes non fiscales',
            'Liste des recettes fiscales',
            'taux/tarif/montant de chaque nature de recettes fiscales',
            'Liste des contribuables des recettes non fiscales',
            'Liste des contribuables des recettes fiscales',
            'taux/tarif/montant du par chaque contribuable',
        ];

        foreach ($roles as $role) {
            Role::create(['nom' => $role]);
        }
    }
}
