<?php

namespace Database\Seeders;

use App\Models\Commune;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = storage_path('app/Commune.csv');

        if (!File::exists($file)) {
            $this->command->error('File does not exist.');
            return;
        }

        $csvData = array_map(function($line) {
            return str_getcsv($line, ';');
        }, file($file));
        $header = array_shift($csvData);

        foreach ($csvData as $row) {
            $data = array_combine($header, $row);

            // Créer une nouvelle commune avec les données du CSV
            Commune::create([
                'num_compte' => $data['num_compte'],
                'departement' => $data['departement'],
                'nom' => $data['nom'],
                'statut' => $data['statut'],
                'superficie' => $data['superficie'],
                'population' => $data['population'],
            ]);
        }

        $this->command->info('Data imported successfully.');
    }
}
