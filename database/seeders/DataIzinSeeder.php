<?php

namespace Database\Seeders;

use App\Models\DataIzin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataIzinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataIzin::create([
            "nama"=>"Izin Ekspor"
        ]);

        DataIzin::create([
            "nama"=>"Izin Lartas"
        ]);

        DataIzin::create([
            "nama"=>"Izin Edar"
        ]);

        DataIzin::create([
            "nama"=>"Izin Navigasi"
        ]);

        DataIzin::create([
            "nama"=>"Izin Fungsi Ganda"
        ]);
    }
}
