<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPelabuhanMuatAsal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "data_pelabuhan_muat_asal";

    protected $fillable = array(
        "nama"
    );
}
