<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contribuable;

class ContribuableSeeder extends Seeder
{
    public function run()
    {
        Contribuable::factory()->count(10)->create();
    }
}
