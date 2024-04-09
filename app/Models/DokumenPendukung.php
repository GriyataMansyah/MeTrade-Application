<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenPendukung extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "dokumen_pendukung";

    protected $fillable = array(
        "id_dokumen","jenis","nomor","tanggal"
    );
}
