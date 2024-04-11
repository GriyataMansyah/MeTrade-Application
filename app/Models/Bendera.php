<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bendera extends Model 
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "bendera";

    protected $fillable = array(
        "nama"
    );
}
