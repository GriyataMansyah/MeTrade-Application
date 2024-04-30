<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiEkspors extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "informasi_ekspors";

    protected $fillable = array(
        "jenis_ekspor","kategori_ekspor","cara_dagang"
    );
}
