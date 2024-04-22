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
        Schema::create('eksportir', function (Blueprint $table) {
            $table->increments("id");
            $table->Integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade');   
            $table->BigInteger("nomor_identitas");
            $table->string("nama");
            $table->string("alamat");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eksportir');
    }
};
