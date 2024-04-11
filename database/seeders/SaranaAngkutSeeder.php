<?php

namespace Database\Seeders;

use App\Models\SaranaAngkut;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SaranaAngkutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SaranaAngkut::create([
            "nama_sarana_angkut" => "SARANA ANGKUT EKSPOR",
            "cara_pengangkutan" => "1 - LAUT",
            "nomor_voy" => "FLG567",
            "bendera" => "ID - INDONESIA"
        ]);
    }
}
