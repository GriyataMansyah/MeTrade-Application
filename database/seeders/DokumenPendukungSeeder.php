<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DokumenPendukung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokumenPendukungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DokumenPendukung::create([
            "id_dokumen"=>"1",
            "id"=>'1',
            "jenis"=>"381 - VOICED",
            "nomor"=>"RA335",
            "tanggal"=>"2024-04-18",
        ]);

        DokumenPendukung::create([
            "id_dokumen"=>"1",
            "id"=>'2',
            "jenis"=>"381 - VOICED",
            "nomor"=>"RA345",
            "tanggal"=>"2024-04-18",
        ]);
    }
}
