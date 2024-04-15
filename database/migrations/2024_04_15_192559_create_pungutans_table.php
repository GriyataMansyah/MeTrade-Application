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
        Schema::create('pungutan', function (Blueprint $table) {
            $table->increments("Id");
            $table->integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade'); 
            $table->string("pungutan")->nullable();
            $table->string("dibayar")->nullable();
            $table->string("ditanggung_pemerintah")->nullable();
            $table->string("ditunda")->nullable();
            $table->string("tidak_dipungut")->nullable();
            $table->string("dibebaskan")->nullable();
            $table->string("sudah_dilunasi")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pungutan');
    }
};
