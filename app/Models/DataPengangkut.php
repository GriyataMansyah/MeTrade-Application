<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengangkut extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "data_pengangkut";

    protected $fillable = array(
        "tanggal_periksa","kantor_periksa"
    );
}


