<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use App\Models\NamaSaranaAngkut;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NamaSaranaAngutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        NamaSaranaAngkut::create([
            "nama"=>'SARANA ANGKUT EKSPOR',
            "id_data_master" => $data->id,
        ]);
    }
}
