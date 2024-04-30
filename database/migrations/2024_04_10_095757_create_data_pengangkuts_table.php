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
        Schema::create('data_pengangkut', function (Blueprint $table) {
          $table->increments("id");
          $table->integer('id_dokumen')->unsigned();
          $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade'); 
          $table->integer('id_informasi_tempat')->unsigned();
          $table->foreign('id_informasi_tempat')->references('id')->on('informasi_tempat')->onDelete('cascade'); 
          $table->date("tanggal_periksa");
          $table->string("kantor_periksa");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pengangkut');
    }
};

