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
        Schema::create('bank', function (Blueprint $table) {
            $table->increments("seri");
            $table->integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade'); 
            $table->string("kode_bank");
            $table->string("nama_bank");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank');
    }
};
