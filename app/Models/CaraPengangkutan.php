<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaraPengangkutan extends Model 
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "cara_pengangkutan";

    protected $fillable = array(
        "nama"
    );
}
