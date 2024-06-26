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
        Schema::create('dokumen_pendukung', function (Blueprint $table) {
            $table->id();
            $table->Integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade');
            $table->string("jenis");
            $table->string("nomor");
            $table->date("tanggal");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_pendukung');
    }
};
