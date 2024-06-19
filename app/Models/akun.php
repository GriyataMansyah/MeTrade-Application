<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Akun extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    public $timestamps = false;
    
    protected $table = "akuns";

    protected $fillable = [
        "username", "password", "level"
    ];
}
