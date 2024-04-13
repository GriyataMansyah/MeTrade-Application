<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaBank extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table="nama_bank";

    protected $fillable=array(
        "nama"
    );
}
