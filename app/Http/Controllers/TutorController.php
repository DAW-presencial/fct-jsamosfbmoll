<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorModel;

class TutorController extends Controller
{
    public function index() {

        $tutor = new TutorModel();

        dd($tutor->getCentroDeTrabajo()->first());

        dd("Tutor");
    }
}
