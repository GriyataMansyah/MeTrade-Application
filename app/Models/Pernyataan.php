<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pernyataan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table="pernyataan";

    protected $fillable = array(
        "tempat","tanggal","nama","jabatan"
    );
}
