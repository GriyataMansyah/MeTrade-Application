<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPungutanBerat extends Model
{
    use HasFactory;

    public $timestamps= false;

    protected $table = "Informasi_pungutan_berat";

    protected $fillable = array(
        "berat_kotor","berat_bersih"
    );
}
