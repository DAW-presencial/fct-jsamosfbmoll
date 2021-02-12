<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaModel extends Model
{
    use HasFactory;

    protected $table = "empresa";
    protected $primaryKey = 'cif';
    public $incrementing = false;
    protected $keyType = "string";
    public $timestamps = false;
}
