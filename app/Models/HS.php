<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HS extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "hs";

    protected $fillable = array(
        "nama"
    );
}
