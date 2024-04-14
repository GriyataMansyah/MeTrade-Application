<?php

namespace Database\Seeders;

use App\Models\DataKode;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataKode::create([
            "nama"=>"HSD"
        ]);

        DataKode::create([
            "nama"=>"MRF"
        ]);

        DataKode::create([
            "nama"=>"CGF"
        ]);

        DataKode::create([
            "nama"=>"UYT"
        ]);

        DataKode::create([
            "nama"=>"JRE"
        ]);

        DataKode::create([
            "nama"=>"JRT"
        ]);

        DataKode::create([
            "nama"=>"QCR"
        ]);

        DataKode::create([
            "nama"=>"KTE"
        ]);
    }
}
