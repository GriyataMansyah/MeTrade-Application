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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments("Id");
            $table->integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade'); 
            $table->string("valuta");
            $table->string("NDPMB");
            $table->string("cara_penyerahan");
            $table->string("nilai_ekspor");
            $table->string("freight");
            $table->string("asuransi");
            $table->string("nominal_asuransi");
            $table->string("berat_kotor");
            $table->string("berat_bersih");
            $table->string("nilai_maklan");
            $table->string("pph");
            $table->string("nilai_bea_keluar");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
