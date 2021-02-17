<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CentroDeTrabajoModel;

class TutorModel extends Model
{
    use HasFactory;

    protected $table = "tutores";
    public $timestamps = false;

    public function getCentroDeTrabajo() {

        return $this->hasOne(CentroDeTrabajoModel::class);

    }
}
