<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transmettre;

class TransmettreSeeder extends Seeder
{
    public function run()
    {
        Transmettre::factory()->count(2)->create();
    }
}
