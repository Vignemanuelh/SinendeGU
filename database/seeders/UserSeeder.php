<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nom' => 'Agent Collecteurs',
                'prenom' => 'Agent Collecteurs',
                'titre' => 'Agent Collecteurs',
                'email' => 'user0@example.com',
                'telephone' => '123456789',
                'npi' => '12345678590',
                'password' => bcrypt('password'),
                'roles' => ['3', '4',  '6']
            ],
            [
                'nom' => 'CSMR',
                'prenom' => 'CSMR',
                'titre' => 'CSMR',
                'email' => 'user1@example.com',
                'telephone' => '123456789',
                'npi' => '123456790',
                'password' => bcrypt('password'),
                'roles' => ['1', '2',  '5']
            ],
            [
                'nom' => 'DADE',
                'prenom' => 'DADE',
                'titre' => 'DADE',
                'email' => 'user14@example.com',
                'telephone' => '123456789',
                'npi' => '75123456790',
                'password' => bcrypt('password'),
                'roles' => ['1', '3', '5', '6']
            ],
            [
                'nom' => 'GU',
                'prenom' => 'GU',
                'titre' => 'GU',
                'email' => 'user13@example.com',
                'telephone' => '123456789',
                'npi' => '758123456790',
                'password' => bcrypt('password'),
                'roles' => ['1', '3', '5', '6']
            ],
            [
                'nom' => 'Etat Civil',
                'prenom' => 'Etat Civil',
                'titre' => 'Etat Civil',
                'email' => 'user12@example.com',
                'telephone' => '123456789',
                'npi' => '75812356790',
                'password' => bcrypt('password'),
                'roles' => ['1', '3', '5', '6']
            ],
            [
                'nom' => 'DAAF',
                'prenom' => 'DAAF',
                'titre' => 'DAAF',
                'email' => 'user2@example.com',
                'telephone' => '123456789',
                'npi' => '7581235790',
                'password' => bcrypt('password'),
                'roles' => ['1', '3', '5', '6']
            ],
            [
                'nom' => 'TC',
                'prenom' => 'TC',
                'titre' => 'TC',
                'email' => 'user3@example.com',
                'telephone' => '123456789',
                'npi' => '12345367890',
                'password' => bcrypt('password'),
                'roles' => ['1', '2',  '5', '7']
            ],
            [
                'nom' => 'RAI',
                'prenom' => 'RAI',
                'titre' => 'RAI',
                'email' => 'user4@example.com',
                'telephone' => '123456789',
                'npi' => '12345676890',
                'password' => bcrypt('password'),
                'roles' => ['3', '4', '6', '7']
            ],
            [
                'nom' => 'SE',
                'prenom' => 'SE',
                'titre' => 'SE',
                'email' => 'user5@example.com',
                'telephone' => '123456789',
                'npi' => '1234567890',
                'password' => bcrypt('password'),
                'roles' => ['1', '3', '5', '6']
            ],
            [
                'nom' => 'DSI',
                'prenom' => 'DSI',
                'titre' => 'DSI',
                'email' => 'user6@example.com',
                'telephone' => '123456789',
                'npi' => '12341567890',
                'password' => bcrypt('password'),
                'roles' => ['1', '2', '3', '4', '5', '6', '7']
            ],
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'nom' => $userData['nom'],
                'prenom' => $userData['prenom'],
                'titre' => $userData['titre'],
                'telephone' => $userData['telephone'],
                'npi' => $userData['npi'],
                'email' => $userData['email'],
                'password' => $userData['password']
            ]);

            foreach ($userData['roles'] as $roleName) {
                $role = Role::find($roleName);
//                $role = Role::where('nom', $roleName)->first();
                $user->roles()->attach($role);
            }
        }
    }
}
