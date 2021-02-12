<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepresentanteModel extends Model
{
    use HasFactory;

    protected $table = "representante";
    protected $primaryKey = 'nif';
    public $incrementing = false;
    protected $keyType = "string";
    public $timestamps = false;
}
