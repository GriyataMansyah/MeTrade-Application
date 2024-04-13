<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $timestamp = false;

    protected $table = "transaksi";

    protected $fillable = array(
        "valuta","NDPMB","cara_penyerahan","nilai_ekspor","freight","asuransi","nominal_asuransi","berat_kotor","berat_bersih","nilai_maklan","pph","nilai_bea_keluar"
    );
}
