<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikBarang extends Model
{
    protected $primaryKey = 'seri';
    
    public $timestamps = false;

    protected $table= "pemilik_barang";

    protected $fillable = array(
        "no_identitas","nama","alamat"
    );
}
