<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    public $timestamps = false;

    protected $table= "headers";

    protected $fillable = array(
        "id_dokumen","nomor_pengajuan","kantor_muat_asal","pelabuhan_muat_ekspor","kantor_muat_ekspor","jenis_ekspor","kategori_ekspor","cara_dagang","cara_bayar","komoditi","curah"
    );
}
