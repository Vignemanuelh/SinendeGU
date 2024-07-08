<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'nom' => 'User 1',
                'prenom' => 'User 1',
                'titre' => 'User 1',
                'email' => 'user1@example.com',
                'telephone' => '123456789',
                'npi' => '12345678590',
                'password' => bcrypt('password'),
                'role' => 'Agent recenseur recettes non fiscales'
            ],
            [
                'nom' => 'User 2',
                'prenom' => 'User 2',
                'titre' => 'User 2',
                'email' => 'user2@example.com',
                'telephone' => '123456789',
                'npi' => '12348567890',
                'password' => bcrypt('password'),
                'role' => 'Agent recenseur recettes fiscales'
            ],
            [
                'nom' => 'User 3',
                'prenom' => 'User 3',
                'titre' => 'User 3',
                'email' => 'user3@example.com',
                'telephone' => '123456789',
                'npi' => '12345367890',
                'password' => bcrypt('password'),
                'role' => 'Chef Service de recouvrement'
            ],
            [
                'nom' => 'User 4',
                'prenom' => 'User 4',
                'titre' => 'User 4',
                'email' => 'user4@example.com',
                'telephone' => '123456789',
                'npi' => '12345676890',
                'password' => bcrypt('password'),
                'role' => 'DAAF'
            ],
            [
                'nom' => 'User 5',
                'prenom' => 'User 5',
                'titre' => 'User 5',
                'email' => 'user5@example.com',
                'telephone' => '123456789',
                'npi' => '1234567890',
                'password' => bcrypt('password'),
                'role' => 'TC'
            ],
            [
                'nom' => 'User 6',
                'prenom' => 'User 6',
                'titre' => 'User 6',
                'email' => 'user6@example.com',
                'telephone' => '123456789',
                'npi' => '12341567890',
                'password' => bcrypt('password'),
                'role' => 'RAI'
            ],
            [
                'nom' => 'User 7',
                'prenom' => 'User 7',
                'titre' =>  'User7',
                'email' => 'user7@example.com',
                'telephone' =>  '123658974',
                'npi' =>    '12536478915',
                'password' => bcrypt('password'),
                'role' => 'SE'
            ],
            [
                'nom' => 'User 8',
                'prenom' => 'User 8',
                'titre' =>  'User8',
                'email' => 'user8@example.com',
                'telephone' =>  '1238974',
                'npi' =>    '1257856478915',
                'password' => bcrypt('password'),
                'role' => 'DSI'
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

            $role = Role::where('nom', $userData['role'])->first();
            $user->roles()->attach($role);
        }
    }
}
