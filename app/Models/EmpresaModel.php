<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RepresentanteModel;

class EmpresaModel extends Model
{
    use HasFactory;

    protected $table = "empresas";
    public $timestamps = false;

    public function getRepresentante() {

        return $this->hasOne(RepresentanteModel::class);

    }
}
