<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataEntitas extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table="data_entitas";

    protected $fillable = array(
        "nama"
    );
}
