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
            'Agent recenseur recettes non fiscales',
            'Agent recenseur recettes fiscales',
            'Chef Service de recouvrement',
            'DAAF',
            'TC',
            'RAI',
            'SE',
            'DSI',
        ];

        foreach ($roles as $role) {
            Role::create(['nom' => $role]);
        }
    }
}
