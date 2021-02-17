<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CoordinadorModel;
use App\Models\EmpresaModel;

class CentroDeTrabajoModel extends Model
{
    use HasFactory;

    protected $table = "centros_de_trabajo";
    public $timestamps = false;

    public function getCoordiandor() {

        return $this->hasOne(CoordinadorModel::class);

    }

    public function getEmpresa() {

        return $this->hasOne(EmpresaModel::class);

    }
}
