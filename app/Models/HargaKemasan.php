<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaKemasan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "harga_kemasan";

    protected $fillable = array(
        "kode_satuan","kemasan","kode_kemasan","harga_fob","volume","berat_bersih","harga_satuan_fob"
    );
}
