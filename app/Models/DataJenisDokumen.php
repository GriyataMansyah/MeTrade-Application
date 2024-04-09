<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJenisDokumen extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "data_jenis_dokumen";

    protected $fillable = array(
    "nama",
    );
}