<?php

namespace Database\Seeders;

use App\Models\Kodekemasan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KodeKemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kodekemasan::create([
            "nama"=>"1A"
        ]);

        Kodekemasan::create([
            "nama"=>"1B"
        ]);

        Kodekemasan::create([
            "nama"=>"1D"
        ]);

        Kodekemasan::create([
            "nama"=>"1F"
        ]);

        Kodekemasan::create([
            "nama"=>"1G"
        ]);

        Kodekemasan::create([
            "nama"=>"1W"
        ]);

        // REFERENSI : https://ceisa40.gitbook.io/pia-ceisa40/referensi/referensi-jenis-kemasan
    }
}
