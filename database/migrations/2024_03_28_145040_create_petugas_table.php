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
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nama");
            $table->string("npwp");
            $table->string("email");
            $table->string("no_hp");
            $table->integer('id_akun')->unsigned();
            $table->foreign('id_akun')->references('id')->on('akuns');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
