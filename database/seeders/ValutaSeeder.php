<?php

namespace Database\Seeders;

use App\Models\Valuta;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ValutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        Valuta::create([
            "nama"=>"Rupiah",
            "id_data_master" => $data->id,
        ]);
    }
}
