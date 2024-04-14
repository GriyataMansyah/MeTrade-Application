<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DaerahAsalBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DaerahAsalBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DaerahAsalBarang::create([
            "nama"=>"Sumatra"
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Jawa"
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Papua"
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Kepulauan Riau"
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Riau"
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Sulawesi"
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Kalimantan"
        ]);
    }
}
