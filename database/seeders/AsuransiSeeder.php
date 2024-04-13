<?php

namespace Database\Seeders;

use App\Models\Asuransi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AsuransiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asuransi::create([
            "nama"=>"DALAM NEGERI"
        ]);

        Asuransi::create([
            "nama"=>"LUAR NEGERI"
        ]);
    }
}
