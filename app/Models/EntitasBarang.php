<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntitasBarang extends Model
{
    use HasFactory;

    public $primaryKey = 'seri';

    public $timestamps = false;

    protected $table = "entitas_barang";

    protected $fillable = array(
        "nomor_identitas","nama","alamat","entitas"
    );
}
