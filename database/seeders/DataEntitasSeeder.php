<?php

namespace Database\Seeders;

use App\Models\DataEntitas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataEntitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataEntitas::create([
            "nama"=>"1 - Pemilik"
        ]);

        DataEntitas::create([
            "nama"=>"2 - Penanggung Jawab"
        ]);

        DataEntitas::create([
            "nama"=>"3 - Agen"
        ]);

        DataEntitas::create([
            "nama"=>"4 - Tangan Kanan"
        ]);
    }
}
