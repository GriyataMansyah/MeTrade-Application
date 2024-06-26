<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valuta extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "valuta";

    protected $fillable = array(
        "nama"
    );
}
