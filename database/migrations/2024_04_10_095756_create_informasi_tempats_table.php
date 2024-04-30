<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('informasi_tempat', function (Blueprint $table) {
            $table->increments("id");
            $table->string("tempat_penimbunan");
            $table->string("pelabuhan_muat_asal");
            $table->string("pelabuhan_muat_ekspor");
            $table->string("pelabuhan_bongkar");
            $table->string("pelabuhan_tujuan");
            $table->string("negara_tujuan_ekspor");
            $table->date("tanggal_perkiraan_ekspor");
            $table->string("lokasi_pemeriksaan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_tempat');
    }
};
