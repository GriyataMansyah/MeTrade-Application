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
        $this->call(KantorMuatAsalSeeder::class);
        $this->call(PelabuhanMuatEksporSeeder::class);
        $this->call(JenisEksporSeeder::class);
        $this->call(KategoriEksporSeeder::class);
        $this->call(JenisDagangSeeder::class);
        $this->call(CaraBayarSeeder::class);
        $this->call(KomoditiSeeder::class);
        $this->call(CurahSeeder::class);
        $this->call(DokumenSeeder::class);
        $this->call(PemilikBarangSeeder::class);
        $this->call(DataJenisDokumenSeeder::class);
        $this->call(DokumenPendukungSeeder::class);
        $this->call(DataTempatPenimbunanSeeder::class);
        $this->call(DataPelbuhanMuatAsalSeeder::class);
        $this->call(DataPelabuhanBongkarSeeder::class);
        $this->call(PelabuhanTujuanSeeder::class);
        $this->call(LokasiPemeriksaanSeeder::class);
    }
}
