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
        Schema::create('dataheader', function (Blueprint $table) {
            $table->increments("id");
            $table->string("kantor_muat_asal");
            $table->string("pelabuhan_muat_ekspor");
            $table->string("kantor_muat_ekspor");
            $table->string("jenis_ekspor");
            $table->string("kategori_ekspor");
            $table->string("cara_dagang");
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
        Schema::dropIfExists('datamasterheaders');
    }
};
