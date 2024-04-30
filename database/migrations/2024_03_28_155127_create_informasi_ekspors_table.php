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
        Schema::create('informasi_ekspors', function (Blueprint $table) {
            $table->increments("id");
            $table->string("jenis_ekspor");
            $table->string("kategori_ekspor");
            $table->string("cara_dagang");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_ekspors');
    }
};
