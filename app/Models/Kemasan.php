<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemasan extends Model
{
    use HasFactory;

    protected $primaryKey = 'seri';

    public $timestamps = false;

    protected $table = "kemasan";

    protected $fillable = array(
        "jumlah","jenis","merek"
    );
}
