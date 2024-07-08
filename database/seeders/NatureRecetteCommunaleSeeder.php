<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NatureRecetteCommunale;

class NatureRecetteCommunaleSeeder extends Seeder
{
    public function run()
    {
        NatureRecetteCommunale::factory()->count(2)->create();
    }
}
