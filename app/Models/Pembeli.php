<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    public $timestamps = false;

    protected $table= "pembeli";

    protected $fillable = array(
        "nama","alamat","negara"
    );
}
