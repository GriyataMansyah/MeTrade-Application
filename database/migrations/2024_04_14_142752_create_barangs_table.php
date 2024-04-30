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
            $table->integer('id_harga_kemasan')->unsigned();
            $table->foreign('id_harga_kemasan')->references('id')->on('harga_kemasan')->onDelete('cascade'); 
            $table->integer('id_informasi_asal_barang')->unsigned();
            $table->foreign('id_informasi_asal_barang')->references('id')->on('informasi_asal_barang')->onDelete('cascade');
            $table->integer('id_informasi_barang')->unsigned();
            $table->foreign('id_informasi_barang')->references('id')->on('informasi_barang')->onDelete('cascade');  
            
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
