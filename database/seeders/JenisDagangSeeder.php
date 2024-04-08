<?php

namespace Database\Seeders;

use App\Models\JenisDagang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisDagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisDagang::create([
            "nama" => "1 - Biasa"
        ]);

        JenisDagang::create([
            "nama" => "2 - Imbal Dagang"
        ]);

        JenisDagang::create([
            "nama" => "15 - Lainnya"
        ]); 
    }
}
