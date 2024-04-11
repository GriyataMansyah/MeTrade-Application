<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaAngkut extends Model
{
    use HasFactory;

    protected $primaryKey = 'seri';

    public $timestamps = false;

    protected $table= "sarana_angkut";

    protected $fillable = array(
        "nama_sarana_angkut","cara_pengangkutan","nomor_voy","bendera"
    );
}
