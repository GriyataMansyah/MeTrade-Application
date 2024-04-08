<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PelabuhanMuatEkspor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelabuhanMuatEksporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PelabuhanMuatEkspor::create([ 
            "nama" => "IDDAS - BATU AMPAR"
        ]);     

        PelabuhanMuatEkspor::create([
            "nama" => "IDDAJ - BATU AJI"
        ]);  
    }
}
