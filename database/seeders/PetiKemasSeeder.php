<?php

namespace Database\Seeders;

use App\Models\PetiKemas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetiKemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetiKemas::create([
            "id_dokumen"=>"1",
            "nomor"=>"KTT51",
            "ukuran"=>"20 - 20 FEET",
            "jenis"=>"4 -  Empty Box",
            "tipe"=>"2 - Tunnel Type"
        ]);
    }
}
