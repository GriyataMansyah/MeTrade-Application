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
            "username" => "1",
            "password" => Hash::make("1"),
            "level" => "pengekspor"
        ]);
        
        // Membuat akun petugas
        Akun::create([
            "username" => "2",
            "password" => Hash::make("2"),
            "level" => "petugas",
        ]);
}
}