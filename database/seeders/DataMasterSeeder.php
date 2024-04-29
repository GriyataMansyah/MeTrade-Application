<?php

namespace Database\Seeders;

use App\Models\petugas;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\PetugasSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataMasterSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PetugasSeeder::class);
        $petugas = petugas::first();
        DataMaster::create([
            "id_petugas" => $petugas->id,
        ]);
    }
}