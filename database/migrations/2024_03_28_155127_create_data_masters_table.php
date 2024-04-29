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
        Schema::create('data_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_petugas')->unsigned();
            $table->foreign('id_petugas')->references('id')->on('petugas')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_master');
    }
};
