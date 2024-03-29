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
        // Memanggil seeder-seeder yang ingin Anda jalankan
        $this->call(AkunSeeder::class);
        // $this->call(PengeksporSeeder::class);
        // $this->call(DokumenSeeder::class);
        // Tambahkan seeder lainnya sesuai kebutuhan Anda
    }
}
