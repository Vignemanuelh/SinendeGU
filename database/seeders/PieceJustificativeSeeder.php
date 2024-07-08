<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PieceJustificative;

class PieceJustificativeSeeder extends Seeder
{
    public function run()
    {
        PieceJustificative::factory()->count(3)->create();
    }
}
