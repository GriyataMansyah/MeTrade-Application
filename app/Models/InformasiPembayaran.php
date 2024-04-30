<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPembayaran extends Model
{
    use HasFactory;
    public $timestamps= false;

    protected $table = "informasi_pembayaran";

    protected $fillable = array(
        "valuta","NDPMB","cara_penyerahan","freight","asuransi","nilai_maklan","pph","nilai_bea_keluar"
    );   
}
