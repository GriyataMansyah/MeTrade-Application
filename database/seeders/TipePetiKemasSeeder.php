<?php

namespace Database\Seeders;

use App\Models\TipePetiKemas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TipePetiKemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $opsi = [
            "1" => "1 - General/ Dry Cargo",
            "2" => "2 - Tunnel Type",
            "3" => "3 - Open Top Steel",
            "4" => "4 - Flat Rack",
            "5" => "5 - Reefer/ Refrigerated",
            "6" => "6 - Barge Container",
            "7" => "7 - Bulk Container",
            "8" => "8 - Isotank",
            "9" => "99 - Lain-lain"
        ];
        
        foreach ($opsi as $nilai => $teks) {
            TipePetiKemas::create([
                "nama" => $teks
            ]);
        }
        
    }
}
