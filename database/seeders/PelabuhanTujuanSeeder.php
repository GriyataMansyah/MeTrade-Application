<?php

namespace Database\Seeders;

use App\Models\PelabuhanTujuan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelabuhanTujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        PelabuhanTujuan::create([
            "nama"=>'SG - SINGAPURA MENTARI',
        ]);

        PelabuhanTujuan::create([
            "nama"=>'SP - SINGOCANDI',
        ]);

        PelabuhanTujuan::create([
            "nama"=>'AS - SINGOPADON',
        ]);
    }
}
