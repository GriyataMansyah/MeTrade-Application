<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eksportir extends Model
{
    public $timestamps = false;

    protected $table= "eksportir";

    protected $fillable = array(
        "nomor_identitas","nama","alamat"
    );
}
