<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entitas extends Model
{
    public $timestamps = false;

    protected $table= "entitas";

    protected $fillable = array(
        "id_dokumen",
    );
}
