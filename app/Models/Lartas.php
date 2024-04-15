<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lartas extends Model
{
    use HasFactory;

    public $primaryKey = 'seri';

    public $timestamps = false;

    protected $table="lartas";

    protected $fillable = array(
        "jenis","nomor","tanggal","fasilitas","izin"
    );
}
