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
        Schema::create('entitas', function (Blueprint $table) {
            $table->increments("id");
            $table->Integer('id_dokumen')->unsigned();
            $table->foreign('id_dokumen')->references('id')->on('dokumens')->onDelete('cascade');    
            $table->string("Entitas");
            
            $table->Integer('id_eksportir')->unsigned();
            $table->foreign('id_eksportir')->references('id')->on('eksportir');    

            $table->Integer('id_penerima')->unsigned();
            $table->foreign('id_penerima')->references('id')->on('penerima');    

            $table->Integer('id_pembeli')->unsigned();
            $table->foreign('id_pembeli')->references('id')->on('pembeli');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entitas');
    }
};
