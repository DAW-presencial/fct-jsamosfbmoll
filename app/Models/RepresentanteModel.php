<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepresentanteModel extends Model
{
    use HasFactory;

    protected $table = "representantes";
    public $timestamps = false;
}
