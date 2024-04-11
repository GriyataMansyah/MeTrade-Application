<?php

namespace Database\Seeders;

use App\Models\JenisPetiKemas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisPetiKemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisPetiKemas::create([
            "nama"=>"4 - EMPTY BOX"
        ]);

        JenisPetiKemas::create([
            "nama"=>"5 - PCC"
        ]);

        JenisPetiKemas::create([
            "nama"=>"6 - LCT"
        ]);
    }
}
