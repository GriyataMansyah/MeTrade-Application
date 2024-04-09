<?php

namespace Database\Seeders;

use App\Models\Dokumen;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokumen::create([
            "id"=>"1",
            "entitas"=>'EKSPORTIR',
            "jenis_pemberitahuan"=>"Pengeluaran",
            "asal_brg"=>"Kawasan Pabean",
            "tujuan_brg"=>"Luar Daerah Pabean",
            "jenis_dokumen"=>"BC 3.0",
            "id_pengekspor"=>"1",
            "id_petugas"=>"1"
        ]);

        Dokumen::create([
            "id"=>"2",
            "entitas"=>'EKSPORTIR',
            "jenis_pemberitahuan"=>"Pengeluaran",
            "asal_brg"=>"Kawasan Pabean",
            "tujuan_brg"=>"Luar Daerah Pabean",
            "jenis_dokumen"=>"BC 3.0",
            "id_pengekspor"=>"1",
            "id_petugas"=>"1"
        ]);
    }
}
