<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaerahAsalBarang extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "daerah_asal_barang";

    protected $fillable = array(
        "nama"
    );
}
