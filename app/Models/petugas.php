<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;

    protected $table= "petugas";

    protected $fillable = array(
        "id_petugas","nama","npwp","email","no_hp"
    );
}