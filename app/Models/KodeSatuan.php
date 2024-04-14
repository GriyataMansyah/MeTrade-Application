<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeSatuan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "kode_satuan";

    protected $fillable = array(
        "nama"
    );
}
