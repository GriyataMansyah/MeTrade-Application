<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pungutan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table="pungutan";

    protected $fillable = array(
        "pungutan","dibayar","ditanggung_pemerintah","ditunda","tidak_dipungut","dibebaskan","sudah_dilunasi"
    );
}
