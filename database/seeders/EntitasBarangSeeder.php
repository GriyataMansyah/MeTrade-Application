<?php

namespace Database\Seeders;

use App\Models\EntitasBarang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntitasBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EntitasBarang::create([
            "nomor_identitas"=>"8273853273930",
            "nama"=>"Ahmadi Irmasyah Lubis",
            "alamat"=>"Bengkong Harapan",
            "entitas"=>"1 - Pemilik"
        ]);
    }
}
