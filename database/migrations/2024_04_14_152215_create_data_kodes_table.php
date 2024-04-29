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
        Schema::create('data_kode', function (Blueprint $table) {
            $table->increments("Id");
            $table->string("nama");
            $table->integer('id_data_master')->unsigned();
            $table->foreign('id_data_master')->references('id')->on('data_master')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kode');
    }
};
