<?php

namespace Database\Seeders;

use App\Models\valuta;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ValutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        valuta::create([
            "nama"=>"Rupiah",
        ]);
    }
}
