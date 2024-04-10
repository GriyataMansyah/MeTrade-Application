<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LokasiPemeriksaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LokasiPemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        LokasiPemeriksaan::create([
            "nama"=>'KP TEMPAT PEMUATAN',
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'GUDANG EKSPORTIR',
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'TEMPAT LAIN YANG DI IZINKAN',
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'TPS',
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'TPP',
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'TPB',
        ]);
    }
}
