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
        Schema::create('lartas', function (Blueprint $table) {
            $table->increments("seri");
            $table->string("jenis");
            $table->string("nomor");
            $table->date("tanggal");
            $table->string("fasilitas");
            $table->string("izin");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lartas');
    }
};
