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
        Schema::create('informasi_asal_barang', function (Blueprint $table) {
            //Informasi Asal Barang
            $table->increments("id");
            $table->string("negara_asal_barang");
            $table->string("daerah_asal_barang");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_asal_barang');
    }
};
