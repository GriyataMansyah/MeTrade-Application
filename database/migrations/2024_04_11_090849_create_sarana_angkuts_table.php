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
        Schema::create('sarana_angkut', function (Blueprint $table) {
            $table->increments("seri");
            $table->Integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade'); 
            $table->string("nama_sarana_angkut");
            $table->string("cara_pengangkutan");
            $table->string("nomor_voy");
            $table->string("bendera");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_angkut');
    }
};
