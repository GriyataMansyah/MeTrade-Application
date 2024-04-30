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
            $table->integer('id_info_pungutan')->unsigned();
            $table->foreign('id_info_pungutan')->references('id')->on('Informasi_pungutan_berat')->onDelete('cascade'); 
            $table->integer('id_info_pembayaran')->unsigned();
            $table->foreign('id_info_pembayaran')->references('id')->on('informasi__pembayaran')->onDelete('cascade'); 
            $table->integer('id_info_ekspor')->unsigned();
            $table->foreign('id_info_ekspor')->references('id')->on('informasi_ekspor')->onDelete('cascade');   
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
