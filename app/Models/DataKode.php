<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKode extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "data_kode";

    protected $fillable = array(
        "nama"
    );
}

