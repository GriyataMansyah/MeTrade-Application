<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Petugas::create([
            "id_akun"=>"2",
            "nama" => "Admin",
            "npwp" => "84732947vsdg",
            "no_hp" => "9876543456",
            "email" => "Admin@Gmail.com"
        ]);
    }
}
