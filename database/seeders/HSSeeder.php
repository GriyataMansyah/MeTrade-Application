<?php

namespace Database\Seeders;

use App\Models\HS;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
//     public function run(): void
//     {

//         $this->call(DataMasterSeeder::class);
//         $data = DataMaster::first();
//         HS::create([
//             "nama"=>"0 - Makanan Dan Hewan",
//             "id_data_master" => $data->id,
//         ]);

//         HS::create([
//             "nama"=>"1 - Minuman Dan Rokok",
//             "id_data_master" => $data->id,
//         ]);
        
//         HS::create([
//             "nama"=>"2 - Bahan mentah, termakan, kecuali bahan bakar",
//             "id_data_master" => $data->id,
//         ]);
        
//         HS::create([
//             "nama"=>"3 - Mineral, bahan bakar, dan lainnya",
//             "id_data_master" => $data->id,
//         ]);

//         HS::create([
//             "nama"=>"4 - Minyak dan lemak hewani & nabati",
//             "id_data_master" => $data->id,
//         ]);

//         HS::create([
//             "nama"=>"5 - Kimia dan produk lainnya",
//             "id_data_master" => $data->id,
//         ]);

//         HS::create([
//             "nama"=>"6 - Manufaktur dasar",
//             "id_data_master" => $data->id,
//         ]);

//         HS::create([
//             "nama"=>"7 - Mesin, transportasi, peralatan",
//             "id_data_master" => $data->id,
//         ]);

//         HS::create([
//             "nama"=>"8 - Barang manufaktur lainnya",
//             "id_data_master" => $data->id,
//         ]);

//         HS::create([
//             "nama"=>"9 - Barang lainnya yang tidak dapat diklasifikasi",
//             "id_data_master" => $data->id,
//         ]);
// }
// }

public function run(): void
    {

        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        HS::create([
            "nama"=>"05010000 - Rambut manusia, tidak dikerjakan, dicuci atau digosok maupun tidak; sisa rambut manusia",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"05021000 - Bulu dan bulu kasar serta sisanya dari babi, babi ternak atau babi hutan",
            "id_data_master" => $data->id,
        ]);
        
        HS::create([
            "nama"=>"050510 - Bulu unggas dari jenis yang digunakan untuk bahan pengisi bulu halus",
            "id_data_master" => $data->id,
        ]);
        
        HS::create([
            "nama"=>"05051010 - Bulu Bebebk",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"05051090 - Bulu unggas dari jenis yang digunakan untuk bahan pengisi bulu halus (Lainnya)",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"05061000 - Osein dan tulang dikerjakan dengan asam ",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"05069000 - Osein dan tulang dikerjakan dengan asam (Lainnya)",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"05071000 - Gading, Bubuk Gading Dan Sisanya.",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"05079020 - Tempurung Kura - Kura",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"05080020 - Cangkang moluska, krustasea atau enchinodermata ",
            "id_data_master" => $data->id,
        ]);    

        HS::create([
            "nama"=>"05111000 - Mani Dari Binatang Jenis Lembu ",
            "id_data_master" => $data->id,
        ]); 

        HS::create([
            "nama"=>"051191 - Produk dari ikan atau krustasea, moluska atau invertebrata air lainnya; binatang mati",
            "id_data_master" => $data->id,
        ]); 

        HS::create([
            "nama"=>"05119110 - Telur Dan Sperma",
            "id_data_master" => $data->id,
        ]); 

        HS::create([
            "nama"=>"05119120 - Telur Artemia",
            "id_data_master" => $data->id,
        ]); 

        HS::create([
            "nama"=>"05119130 - Kulit Ikan",
            "id_data_master" => $data->id,
        ]); 

        HS::create([
            "nama"=>"05119910 - Mani Dari Binatang Peliharaan",
            "id_data_master" => $data->id,
        ]); 

        HS::create([
            "nama"=>"05119920 - Telur Ulat Sutra",
            "id_data_master" => $data->id,
        ]); 

        HS::create([
            "nama"=>"05119930 - Sponge Alami",
            "id_data_master" => $data->id,
        ]); 

}
}