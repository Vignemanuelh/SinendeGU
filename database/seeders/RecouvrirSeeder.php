<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recouvrir;

class RecouvrirSeeder extends Seeder
{
    public function run()
    {
        Recouvrir::factory()->count(2)->create();
    }
}
