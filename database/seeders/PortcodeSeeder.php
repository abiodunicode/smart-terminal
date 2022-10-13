<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portcode;

class PortcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portcode::truncate();

        $csvFile = fopen(base_path("database/data/Port_Codes_Reference.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Portcode::create([
                    "code" => $data['0'],
                    "name" => $data['1']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
