<?php

namespace Database\Seeders;

use App\Models\JumlahKemasan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahKemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JumlahKemasan::create([
            "nama"=>"1"
        ]);

        JumlahKemasan::create([
            "nama"=>"2"
        ]);

        JumlahKemasan::create([
            "nama"=>"3"
        ]);

        JumlahKemasan::create([
            "nama"=>"4"
        ]);

        JumlahKemasan::create([
            "nama"=>"5"
        ]);

        JumlahKemasan::create([
            "nama"=>"6"
        ]);

        JumlahKemasan::create([
            "nama"=>"7"
        ]);

        JumlahKemasan::create([
            "nama"=>"8"
        ]);

        JumlahKemasan::create([
            "nama"=>"9"
        ]);

        JumlahKemasan::create([
            "nama"=>"10"
        ]);
    }
}
