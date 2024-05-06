<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'seri';

    protected $table="bank";

    protected $fillable=array(
        "id_dokumen","kode_bank","nama_bank"
    );
}
