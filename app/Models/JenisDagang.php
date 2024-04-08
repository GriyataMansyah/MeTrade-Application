<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisDagang extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "jenis_dagang";

    protected $fillable = array(
        "nama"
    );
}
