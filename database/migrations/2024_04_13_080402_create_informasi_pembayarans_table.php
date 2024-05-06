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
        Schema::create('informasi_pembayaran', function (Blueprint $table) {
            $table->increments("id");
            $table->string("valuta");
            $table->string("NDPMB");
            $table->string("cara_penyerahan");
            $table->string("nilai_ekspor");
            $table->string("freight");
            $table->string("nominal_asuransi");
            $table->string("nilai_maklan");
            $table->string("pph");
        });
    }

    /**
     * Reverse the migrations h.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_pembayaran');
    }
};
