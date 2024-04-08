<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelabuhanMuatEkspor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "pelabuhan_muat_ekspor";

    protected $fillable = array(
        "nama"
    );
}
