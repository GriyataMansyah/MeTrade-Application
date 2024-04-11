<?php

namespace Database\Seeders;

use App\Models\UkuranPetiKemas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UkuranPetiKemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UkuranPetiKemas::create([
            "nama"=>'20 - 20 FEET',
        ]);

        UkuranPetiKemas::create([
            "nama"=>'40 - 40 FEET',
        ]);

        UkuranPetiKemas::create([
            "nama"=>'45 - 45 FEET',
        ]);

        UkuranPetiKemas::create([
            "nama"=>'60 - 60 FEET',
        ]);
    }
}
