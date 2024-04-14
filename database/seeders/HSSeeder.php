<?php

namespace Database\Seeders;

use App\Models\HS;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HS::create([
            "nama"=>"0 - Makanan Dan Hewan"
        ]);

        HS::create([
            "nama"=>"1 - Minuman Dan Rokok"
        ]);
        
        HS::create([
            "nama"=>"2 - Bahan mentah, termakan, kecuali bahan bakar"
        ]);
        
        HS::create([
            "nama"=>"3 - Mineral, bahan bakar, dan lainnya"
        ]);

        HS::create([
            "nama"=>"4 - Minyak dan lemak hewani & nabati"
        ]);

        HS::create([
            "nama"=>"5 - Kimia dan produk lainnya"
        ]);

        HS::create([
            "nama"=>"6 - Manufaktur dasar"
        ]);

        HS::create([
            "nama"=>"7 - Mesin, transportasi, peralatan"
        ]);

        HS::create([
            "nama"=>"8 - Barang manufaktur lainnya"
        ]);

        HS::create([
            "nama"=>"9 - Barang lainnya yang tidak dapat diklasifikasi"
        ]);
}
}