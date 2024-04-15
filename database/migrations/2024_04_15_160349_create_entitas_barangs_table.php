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
        Schema::create('entitas_barang', function (Blueprint $table) {
            $table->increments("seri");
            $table->string("nomor_identitas");
            $table->string("nama");
            $table->string("alamat");
            $table->string("entitas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entitas_barang');
    }
};
