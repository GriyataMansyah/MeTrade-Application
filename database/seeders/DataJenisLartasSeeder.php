<?php

namespace Database\Seeders;

use App\Models\DataJenisLartas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataJenisLartasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataJenisLartas::create([
            "nama"=>"ALAT TELEKOMUNIKASI"
        ]);

        DataJenisLartas::create([
            "nama"=>"OBAT"
        ]);

        DataJenisLartas::create([
            "nama"=>"KOMODITI CITES"
        ]);

        DataJenisLartas::create([
            "nama"=>"KOMODITI WAJIB SNI"
        ]);

        DataJenisLartas::create([
            "nama"=>"BBM"
        ]);

        DataJenisLartas::create([
            "nama"=>"BERAS"
        ]);

        DataJenisLartas::create([
            "nama"=>"BESI BAJA"
        ]);

        DataJenisLartas::create([
            "nama"=>"SENJATA API"
        ]);

        DataJenisLartas::create([
            "nama"=>"BAHAN PANGAN"
        ]);

        DataJenisLartas::create([
            "nama"=>"LAINNYA"
        ]);
    }
}
