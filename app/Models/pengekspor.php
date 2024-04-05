<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengekspor extends Model
{
    use HasFactory;

    protected $table= "pengekspor";

    protected $fillable = array(
        "nama","npwp","email","no_hp"
    );
}
