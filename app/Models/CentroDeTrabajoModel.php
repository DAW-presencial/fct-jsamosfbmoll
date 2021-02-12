<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroDeTrabajoModel extends Model
{
    use HasFactory;

    protected $table = "centro_de_trabajo";
    public $timestamps = false;
}
