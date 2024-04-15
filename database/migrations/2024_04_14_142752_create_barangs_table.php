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
        Schema::create('barang', function (Blueprint $table) {
            $table->increments("seri");
            $table->integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade'); 
            $table->string("HS");
            $table->string("lartas");
            $table->string("kode");
            $table->string("uraian");
            $table->string("mark")->nullable();
            $table->string("tipe")->nullable();
            $table->string("ukuran")->nullable();
            $table->string("negara_asal_barang");
            $table->string("daerah_asal_barang");
            $table->string("satuan");
            $table->string("kode_satuan");
            $table->string("kemasan");
            $table->string("kode_kemasan");
            $table->string("harga_fob");
            $table->string("volume");
            $table->string("berat_bersih");
            $table->string("harga_satuan_fob");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
