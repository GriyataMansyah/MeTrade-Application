<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJenisLartas extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "data_jenis_lartas";

    protected $fillable = array(
    "nama",
    );
}
