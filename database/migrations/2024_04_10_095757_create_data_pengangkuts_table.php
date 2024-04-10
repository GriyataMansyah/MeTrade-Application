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
        Schema::create('data_pengangkut', function (Blueprint $table) {
          $table->increments("id");
          $table->integer('id_dokumen')->unsigned();
          $table->foreign('id_dokumen')->references('id')->on('dokumens'); 
          $table->string("tempat_penimbunan");
          $table->string("pelabuhan_maut_asal");
          $table->string("pelabuhan_muat_ekspor");
          $table->string("pelabuhan_bongkar");
          $table->string("pelabuhan_tujuan");
          $table->string("negara_tujuan_ekspor");
          $table->date("tanggal_perkiraan_ekspor");
          $table->string("lokasi_pemeriksaan");
          $table->date("tanggal_periksa");
          $table->string("kantor_periksa");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pengangkut');
    }
};
