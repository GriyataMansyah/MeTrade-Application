<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primarykey = "seri";

    protected $table="bank";

    protected $fillable=array(
        "kode_bank","nama_bank"
    );
}
