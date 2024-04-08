<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataheader extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "dataheader";

    protected $fillable = array(
        "kantor_muat_asal","pelabuhan_muat_ekspor","kantor_muat_ekspor","jenis_ekspor","kategori_ekspor","cara_dagang","cara_bayar","komoditi","curah"
    );
}
