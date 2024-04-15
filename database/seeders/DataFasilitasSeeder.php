<?php

namespace Database\Seeders;

use App\Models\DataFasilitas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataFasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataFasilitas::create([
            "nama"=>"Jalur Prioritas"
        ]);

        DataFasilitas::create([
            "nama"=>"Jalur Hijau"
        ]);

        DataFasilitas::create([
            "nama"=>"Jalur Kuning"
        ]);

        DataFasilitas::create([
            "nama"=>"Jalur Merah"
        ]);

        DataFasilitas::create([
            "nama"=>"Vooruitslag"
        ]);
    }
}
