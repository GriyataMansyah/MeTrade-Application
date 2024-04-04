<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
    use HasFactory;

    protected $table= "dokumen";

    protected $fillable = array(
        "id_dokumen","entitas","jenis_pemberitahuan","asal_brg","tujuan_brg","jenis_dokumen","id_pengekspor","id_petugas","nomor_pengajuan"
    );
}
