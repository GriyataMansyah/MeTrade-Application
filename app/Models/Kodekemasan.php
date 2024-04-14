<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodekemasan extends Model 
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "kode_kemasan";

    protected $fillable = array(
        "nama"
    );
}
