<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepresentanteModel;

class RepresentanteController extends Controller
{
    public function index() {
        $representantes = RepresentanteModel::all();

        return view("representante", [
            "representantes" => $representantes
            ]);
    }

    public function store(Request $request) {

        $request->validate([
            "nif" => ["required"]
        ]);

        RepresentanteModel::create([
            "nif" => strtoupper($request->nif),
            "nombre" => $request->name
        ]);

        return redirect()->route("representante");

    }
}
