<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\dataheader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        dataheader::create([
            "kantor_muat_asal" => "TB000 KPPBC TMP A BATU AMPAR, TB001 KPPBC TMP B BATU AJI",
            "pelabuhan_muat_ekspor" => "IDDAS - BATU AMPAR",
            "kantor_muat_ekspor" => "IDDAS - BATU AMPAR",
            "jenis_ekspor" => "1 - Ekspor Biasa",
            "kategori_ekspor" => "10 - Biasa",
            "cara_dagang" => "1 - Biasa, 2 - Imbal Dagang, 15 - Lainnya",
            "cara_bayar" => "1 - Tunai, 2 - Berkala, 3 - Dengan Jaminan, 9 - Gabungan/Lainnya",
            "komoditi" => "1 - Migas, 2 - Non Migas",
            "curah" => "1 - Curah, 2 - Non Curah"
        ]);
        
    }
}
