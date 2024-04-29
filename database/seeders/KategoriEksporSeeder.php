<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\KategoriEkspor;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriEksporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        KategoriEkspor::create([
            "nama" => "10 - Biasa",
            "id_data_master" => $data->id,
        ]);

        KategoriEkspor::create([
            "nama" => "21 - Niper Dgn Pembebasan",
            "id_data_master" => $data->id,
        ]);

        KategoriEkspor::create([
            "nama" => "22 -  Niper Dgn Pengembalian",
            "id_data_master" => $data->id,
        ]);

        KategoriEkspor::create([
            "nama" => "23 - KITE dengan Pembebasan dan Pengembalian",
            "id_data_master" => $data->id,
        ]);

        KategoriEkspor::create([
            "nama" => "31 - Khusus Barang Perwakilan Negara Asing",
            "id_data_master" => $data->id,
        ]);

        KategoriEkspor::create([
            "nama" => "32 - Khusus Barang Badan Internasional",
            "id_data_master" => $data->id,
        ]);

        KategoriEkspor::create([
            "nama" => "33 - Khusus Barang Kiriman (Pos atau Jasa Titipan)",
            "id_data_master" => $data->id,
        ]);

        KategoriEkspor::create([
            "nama" => "34 - Khusus Barang Pindahan",
            "id_data_master" => $data->id,
        ]);

        KategoriEkspor::create([
            "nama" => "35 - Khusus Barang Keperluan Umum",
            "id_data_master" => $data->id,
        ]);     
    }
}
