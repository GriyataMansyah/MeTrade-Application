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
            $table->Integer('id_pengekspor')->unsigned();
            $table->foreign('id_pengekspor')->references('id')->on('pengekspors');

            $table->Integer('id_petugas')->unsigned();
            $table->foreign('id_petugas')->references('id')->on('petugas');

            $table->increments("id");
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