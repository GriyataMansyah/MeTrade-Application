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
        Schema::create('harga_kemasan', function (Blueprint $table) {
        //Informasi Harga Kemasan
        $table->increments("id");
        $table->string("kemasan");
        $table->string("harga_fob");
        $table->string("volume");
        $table->string("berat_bersih");
        $table->string("harga_satuan_fob");        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga_kemasan');
    }
};
