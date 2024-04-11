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
        Schema::create('peti_kemas', function (Blueprint $table) {
            $table->increments("seri");
            $table->integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens'); 
            $table->string("nomor");
            $table->string("ukuran");
            $table->string("jenis");
            $table->string("tipe");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peti_kemas');
    }
};
