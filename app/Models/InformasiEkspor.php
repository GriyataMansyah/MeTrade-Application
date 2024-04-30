<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiEkspor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "informasi_ekspor";

    protected $fillable = array(
        "nilai_bea_keluar","asuransi"
    );
}
