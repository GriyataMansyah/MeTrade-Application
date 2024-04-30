<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiAsalBarang extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "informasi_asal_barang";

    protected $fillable = array(
    "negara_asal_barang","daerah_asal_barang"
    );
}
