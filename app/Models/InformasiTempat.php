<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiTempat extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "informasi_tempat";

    protected $fillable = array(
        "tempat_penimbunan","pelabuhan_muat_asal","pelabuhan_muat_ekspor","pelabuhan_bongkar","pelabuhan_tujuan","negara_tujuan_ekspor","tanggal_perkiraan_ekspor","lokasi_pemeriksaan"
    );
}
