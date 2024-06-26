<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $primaryKey = 'seri';

    public $timestamps = false;

    protected $table = "barang";

    protected $fillable = array(
      "id_dokumen","id_harga_kemasan"
    );
}
