<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataPelabuhanMuatAsal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataPelbuhanMuatAsalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        DataPelabuhanMuatAsal::create([
            "nama"=>'IDDAS - BATU AMPAR',
        ]);

        DataPelabuhanMuatAsal::create([
            "nama"=>'IDDAJ - BATU AJI',
        ]);
    }
}
