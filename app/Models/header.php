<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    use HasFactory;

    protected $table= "header";

    protected $fillable = array(
        "nomor_pengajuan","kantor_muat_asal","pelabuhan_muat_ekspor","kantor_muat_ekspor","jenis_ekspor","kategori_ekspor","cara_dagang","cara_bayar","komoditi","curah"
    );
}
