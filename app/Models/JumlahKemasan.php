<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JumlahKemasan extends Model 
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "jumlah_kemasan";

    protected $fillable = array(
        "nama"
    );
}
