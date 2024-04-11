<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UkuranPetiKemas extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "ukuran_peti_kemas";

    protected $fillable = array(
        "nama"
    );
}
