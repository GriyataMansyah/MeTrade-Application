<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $primaryKey = 'seri';

    public $timestamps = false;

    protected $table = "barang";

    protected $fillable = array(
        "HS" ,"lartas","kode","uraian","mark","tipe","ukuran","negara_asal_barang","daerah_asal_barang","satuan","kode_satuan","kemasan","kode_kemasan","harga_fob","volume","berat_bersih","harga_satuan_fob"
    );
}
