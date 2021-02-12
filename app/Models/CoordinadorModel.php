<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoordinadorModel extends Model
{
    use HasFactory;

    protected $table = "coordinador";
    protected $primaryKey = 'nif';
    public $incrementing = false;
    protected $keyType = "string";
    public $timestamps = false;
}
