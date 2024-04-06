<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengekspor;

class PengeksporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengekspor::create([
            "id_akun"=>"1",
            "nama" => "Pemula",
            "npwp" => "4342301asfas",
            "no_hp" => "081354174808",
            "email" => "Gajah@Gmail.com"
        ]);
    }
}
