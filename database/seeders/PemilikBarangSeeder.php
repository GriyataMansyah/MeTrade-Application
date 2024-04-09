<?php

namespace Database\Seeders;

use App\Models\PemilikBarang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemilikBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PemilikBarang::create([
            "no_identitas"=>"09817857385832",
            "alamat"=>"Jl.MeanDe Heack 40 Tars Man Ka",
            "nama"=>"Mas Hendra"
        ]);  

        PemilikBarang::create([
            "no_identitas"=>"09817857385832",
            "alamat"=>"Jl.MeanDe Heack 42 Tars Man Ka",
            "nama"=>"Adik Hendra"
        ]);  
    }
}
