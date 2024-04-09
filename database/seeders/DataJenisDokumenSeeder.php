<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataJenisDokumen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataJenisDokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        DataJenisDokumen::create([
            "nama"=>'380 - INVOICE',
        ]);

        DataJenisDokumen::create([
            "nama"=>'381 - VOICED',
        ]);

        DataJenisDokumen::create([
            "nama"=>'382 - PROTECTED',
        ]);

        DataJenisDokumen::create([
            "nama"=>'383 - SECURED',
        ]);

        DataJenisDokumen::create([
            "nama"=>'384 - PUBLIC',
        ]);
    }
}
