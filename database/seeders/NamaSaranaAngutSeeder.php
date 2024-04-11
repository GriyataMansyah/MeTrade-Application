<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NamaSaranaAngkut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NamaSaranaAngutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NamaSaranaAngkut::create([
            "nama"=>'SARANA ANGKUT EKSPOR',
        ]);
    }
}
