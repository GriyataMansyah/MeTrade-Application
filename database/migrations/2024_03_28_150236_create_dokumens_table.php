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
        Schema::create('dokumens', function (Blueprint $table) {
            $table->bigInteger('id_pengekspor')->unsigned()->nullable();
            $table->foreign('id_pengekspor')->references('id')->on('pengekspors');

            $table->bigInteger('id_petugas')->unsigned()->nullable();
            $table->foreign('id_petugas')->references('id')->on('petugas');

            $table->bigInteger('nomor_pengajuan')->unsigned()->nullable();
            $table->foreign('nomor_pengajuan')->references('nomor_pengajuan')->on('headers');

            $table->increments("id_dokumen");
            $table->string("entitas");
            $table->string("jenis_pemberitahuan");
            $table->string("asal_brg");
            $table->string("tujuan_brg");
            $table->string("jenis_dokumen");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
}

;