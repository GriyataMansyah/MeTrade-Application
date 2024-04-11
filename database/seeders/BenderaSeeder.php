<?php

namespace Database\Seeders;

use App\Models\Bendera;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BenderaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bendera::create([
            "nama"=>'ID - INDONESIA',
        ]);

        Bendera::create([
            "nama"=>'SG - SINGAPURA',
        ]);
    }
}
