<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataTempatPenimbunan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataTempatPenimbunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        DataTempatPenimbunan::create([
            "nama"=>'GDI - GUDANG NEGARA',
        ]);

        DataTempatPenimbunan::create([
            "nama"=>'GDS - GUDANG SWASTA',
        ]);

        DataTempatPenimbunan::create([
            "nama"=>'GDT - GUDANG TERBUKA',
        ]);
    }
}
