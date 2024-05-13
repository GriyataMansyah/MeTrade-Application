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
        // Periksa apakah data petugas dengan id_akun tertentu sudah ada
        $existingPetugas = Petugas::where('id_akun', '2')->first();
    
        // Jika tidak ada data yang ditemukan, maka tambahkan data baru
        if (!$existingPetugas) {
            Petugas::create([
                "id_akun"=>"2",
                "nama" => "Admin",
                "npwp" => "84732947vsdg",
                "no_hp" => "9876543456",
                "email" => "Admin@Gmail.com"
            ]);
        }
    }
    
}
