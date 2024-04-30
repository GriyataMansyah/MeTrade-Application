<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiBarang extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "informasi_barang";

    protected $fillable = array(
        "ukuran","satuan","uraian","mark","tipe","HS" ,"lartas","kode",
    );
}
