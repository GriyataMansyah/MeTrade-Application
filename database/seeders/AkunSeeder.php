<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Akun;
use Illuminate\Support\Facades\Hash;


class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Akun::create([
            "username" => "pengekspor",
            "password" => Hash::make("pengekspor"),
            "level" => "pengekspor"
        ]);
        
        // Membuat akun petugas
        Akun::create([
            "username" => "petugas",
            "password" => Hash::make("petugas"),
            "level" => "petugas",
        ]);
}
}