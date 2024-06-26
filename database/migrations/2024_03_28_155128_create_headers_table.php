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
        Schema::create('headers', function (Blueprint $table) {
            $table->increments("id");
            $table->Integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade');   
            $table->Integer('id_informasi_eksports')->unsigned();
            $table->foreign('id_informasi_eksports')->references('id')->on('informasi_ekspors')->onDelete('cascade');  
            $table->unsignedBigInteger('nomor_pengajuan');
            $table->string("kantor_muat_asal");
            $table->string("pelabuhan_muat_ekspor");
            $table->string("kantor_muat_ekspor");
            $table->string("cara_bayar");
            $table->string("komoditi");
            $table->string("curah");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
