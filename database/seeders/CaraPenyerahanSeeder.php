<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\CaraPenyerahan;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaraPenyerahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
    CaraPenyerahan::create([
        "nama"=>'CFR - Cost and Freight',
        "id_data_master" => $data->id,
    ]);

    CaraPenyerahan::create([
        "nama"=>'CFR - CIF - Cost, Insurance and Freight',
        "id_data_master" => $data->id,
    ]);

    CaraPenyerahan::create([
        "nama"=>'CIP - Carriage and Insurance Paid To',
        "id_data_master" => $data->id,
    ]);

    CaraPenyerahan::create([
        "nama"=>'CPT - Carriage Paid To',
        "id_data_master" => $data->id,
    ]);
    
    CaraPenyerahan::create([
        "nama"=>'DAP - Delivered At Place',
        "id_data_master" => $data->id,
    ]);

    CaraPenyerahan::create([
        "nama"=>'DAT - Delivered At Terminal',
        "id_data_master" => $data->id,
    ]);

    CaraPenyerahan::create([
        "nama"=>'DDP - Delivered Duty Paid',
        "id_data_master" => $data->id,
    ]);

    CaraPenyerahan::create([
        "nama"=>'EXW - Ex Works',
        "id_data_master" => $data->id,
    ]);

    CaraPenyerahan::create([
        "nama"=>'FAS - Free Alongside Ship',
        "id_data_master" => $data->id,
    ]);
}
}