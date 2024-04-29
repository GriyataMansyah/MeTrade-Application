<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use App\Models\DataTempatPenimbunan;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataTempatPenimbunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        DataTempatPenimbunan::create([
            "nama"=>'GDI - GUDANG NEGARA',
            "id_data_master" => $data->id,
        ]);

        DataTempatPenimbunan::create([
            "nama"=>'GDS - GUDANG SWASTA',
            "id_data_master" => $data->id,
        ]);

        DataTempatPenimbunan::create([
            "nama"=>'GDT - GUDANG TERBUKA',
            "id_data_master" => $data->id,
        ]);
    }
}
