<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIzin extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "data_izin";

    protected $fillable = array(
    "nama",
    );
}
