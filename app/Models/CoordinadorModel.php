<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoordinadorModel extends Model
{
    use HasFactory;

    protected $table = "coordinadores";
    public $timestamps = false;

    protected $fillable = [
        "nif",
        "nombre"
    ];
}
