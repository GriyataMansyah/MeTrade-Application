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
    public function run(): void
    {

        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        HS::create([
            "nama"=>"0 - Makanan Dan Hewan",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"1 - Minuman Dan Rokok",
            "id_data_master" => $data->id,
        ]);
        
        HS::create([
            "nama"=>"2 - Bahan mentah, termakan, kecuali bahan bakar",
            "id_data_master" => $data->id,
        ]);
        
        HS::create([
            "nama"=>"3 - Mineral, bahan bakar, dan lainnya",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"4 - Minyak dan lemak hewani & nabati",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"5 - Kimia dan produk lainnya",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"6 - Manufaktur dasar",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"7 - Mesin, transportasi, peralatan",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"8 - Barang manufaktur lainnya",
            "id_data_master" => $data->id,
        ]);

        HS::create([
            "nama"=>"9 - Barang lainnya yang tidak dapat diklasifikasi",
            "id_data_master" => $data->id,
        ]);
}
}