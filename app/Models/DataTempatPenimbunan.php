<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTempatPenimbunan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "data_tempat_penimbunan";

    protected $fillable = array(
        "nama"
    );
}
