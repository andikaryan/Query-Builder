<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DokterModel;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = database_path('seeders/dokter.csv'); // Ganti dengan path file CSV Anda
        $delimiter = ','; // Sesuaikan dengan delimiter pada file CSV Anda

        $file = fopen($csvFile, 'r');
        $header = fgetcsv($file, 0, $delimiter);

        while (($data = fgetcsv($file, 0, $delimiter)) !== false) {
            $record = array_combine($header, $data);
            DokterModel::create($record); // Ganti dengan model yang sesuai
        }

        fclose($file);
    }
}
