<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AkunSeeder::class);
        $this->call(PengeksporSeeder::class);
        $this->call(PetugasSeeder::class);
        $this->call(DataheaderSeeder::class);
    }
}
