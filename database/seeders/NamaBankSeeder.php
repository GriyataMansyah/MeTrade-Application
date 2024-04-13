<?php

namespace Database\Seeders;

use App\Models\NamaBank;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NamaBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NamaBank::create([
            "nama"=>"BCA"
        ]);

        NamaBank::create([
            "nama"=>"BNI"
        ]);

        NamaBank::create([
            "nama"=>"BRI"
        ]);
    }
}
