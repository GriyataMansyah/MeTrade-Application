<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\Kodekemasan;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KodeKemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        Kodekemasan::create([
            "nama"=>"1A",
            "id_data_master" => $data->id,
        ]);

        Kodekemasan::create([
            "nama"=>"1B",
            "id_data_master" => $data->id,
        ]);

        Kodekemasan::create([
            "nama"=>"1D",
            "id_data_master" => $data->id,
        ]);

        Kodekemasan::create([
            "nama"=>"1F",
            "id_data_master" => $data->id,
        ]);

        Kodekemasan::create([
            "nama"=>"1G",
            "id_data_master" => $data->id,
        ]);

        Kodekemasan::create([
            "nama"=>"1W",
            "id_data_master" => $data->id,
        ]);

        // REFERENSI : https://ceisa40.gitbook.io/pia-ceisa40/referensi/referensi-jenis-kemasan
    }
}
