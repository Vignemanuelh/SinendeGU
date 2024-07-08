<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SecretariatExecutif;

class SecretariatExecutifSeeder extends Seeder
{
    public function run()
    {
        SecretariatExecutif::factory()->count(5)->create();
    }
}
