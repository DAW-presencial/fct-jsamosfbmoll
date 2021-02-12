<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorModel extends Model
{
    use HasFactory;

    protected $table = "tutor";
    protected $primaryKey = 'nif';
    public $incrementing = false;
    protected $keyType = "string";
    public $timestamps = false;
}
