<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipePetiKemas extends Model 
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "tipe_peti_kemas";

    protected $fillable = array(
        "nama"
    );
}
