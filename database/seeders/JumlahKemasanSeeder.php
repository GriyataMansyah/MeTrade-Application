<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\JumlahKemasan;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahKemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        JumlahKemasan::create([
            "nama"=>"1",
            "id_data_master" => $data->id,
        ]);

        JumlahKemasan::create([
            "nama"=>"2",
            "id_data_master" => $data->id,
        ]);

        JumlahKemasan::create([
            "nama"=>"3",
            "id_data_master" => $data->id,
        ]);

        JumlahKemasan::create([
            "nama"=>"4",
            "id_data_master" => $data->id,
        ]);

        JumlahKemasan::create([
            "nama"=>"5",
            "id_data_master" => $data->id,
        ]);

        JumlahKemasan::create([
            "nama"=>"6",
            "id_data_master" => $data->id,
        ]);

        JumlahKemasan::create([
            "nama"=>"7",
            "id_data_master" => $data->id,
        ]);

        JumlahKemasan::create([
            "nama"=>"8",
            "id_data_master" => $data->id,
        ]);

        JumlahKemasan::create([
            "nama"=>"9",
            "id_data_master" => $data->id,
        ]);

        JumlahKemasan::create([
            "nama"=>"10",
            "id_data_master" => $data->id,
        ]);
    }
}
