<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaSaranaAngkut extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "nama_sarana_angkut";

    protected $fillable = array(
        "nama"
    );
}
