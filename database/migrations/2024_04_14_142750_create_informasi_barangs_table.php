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
        Schema::create('informasi_barang', function (Blueprint $table) {
                   //Informasi Barang
                   $table->increments("id");
                   $table->string("satuan");              
                   $table->string("ukuran")->nullable();    
                   $table->string("tipe")->nullable();            
                   $table->string("mark")->nullable();
                   $table->string("kode");
                   $table->string("uraian");            
                   $table->string("HS");
                   $table->string("lartas");
                   $table->string("kode_kemasan");
                   $table->string("kode_satuan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_barang');
    }
};
