<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetiKemas extends Model 
{
    use HasFactory;

    protected $primaryKey = 'seri';

    public $timestamps = false;

    protected $table = "peti_kemas";

    protected $fillable = array(
        "nomor","ukuran","jenis","tipe"
    );
}
