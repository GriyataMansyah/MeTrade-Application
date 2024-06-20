<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "dokumens";

    protected $fillable = array(
        "id_dokumen","entitas","jenis_pemberitahuan","asal_brg","tujuan_brg","jenis_dokumen","id_pengekspor","id_petugas",
    );
}
