<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akun;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        akun::create([
            "username" => "pengekspor",
            "password" => "pengekspor",
        ]);

        akun::create([
            "username" => "petugas",
            "password" => "petugas",
        ]);
    }
}
