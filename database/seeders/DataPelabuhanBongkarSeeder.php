<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PelabuhanBongkar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataPelabuhanBongkarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        PelabuhanBongkar::create([
            "nama"=>'BTH - BATAM',
        ]);

        PelabuhanBongkar::create([
            "nama"=>'GLG - GALANG',
        ]);

        PelabuhanBongkar::create([
            "nama"=>'RMB - REMPANG',
        ]);
    }
}
