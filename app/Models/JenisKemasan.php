<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKemasan extends Model 
{
    use HasFactory;

    public $timestamps = false;

    protected $table="jenis_kemasan";

    protected $fillable = array(
        "nama"
    );
}
