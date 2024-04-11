<?php

namespace Database\Seeders;

use App\Models\Kemasan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KemasanSeeder extends Seeder
{
    /**
     *   
     * Run the database seeds.
     */
    public function run(): void
    {
        Kemasan::create([
            "id_dokumen"=>"1",
            "jumlah"=>"5",
            "jenis"=>"2 -  WOODEN BARREL",
            "merek"=>"SNI"
        ]);
    }
}
