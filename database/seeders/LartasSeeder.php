<?php

namespace Database\Seeders;

use App\Models\Lartas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LartasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lartas::create([
            "jenis"=>"OBAT",
            "nomor"=>"AKJ3985",
            "tanggal"=>"2017-5-24",
            "fasilitas"=>"Jalur Hijau",
            "izin"=>"Izin Ekspor"
        ]);
    }
}
