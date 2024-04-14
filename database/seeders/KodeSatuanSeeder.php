<?php

namespace Database\Seeders;

use App\Models\KodeSatuan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KodeSatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KodeSatuan::create([
            "nama"=>"KG"
        ]);

        KodeSatuan::create([
            "nama"=>"HG"
        ]);

        KodeSatuan::create([
            "nama"=>"Dag"
        ]);

        KodeSatuan::create([
            "nama"=>"MG"
        ]);

        KodeSatuan::create([
            "nama"=>"DG"
        ]);

        KodeSatuan::create([
            "nama"=>"CG"
        ]);

        KodeSatuan::create([
            "nama"=>"MG"
        ]);
    }
}
