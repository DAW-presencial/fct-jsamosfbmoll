<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoordinadorModel;

class CoordinadorController extends Controller
{
    public function index() {

        $coordinadores = CoordinadorModel::all();

        return view("coordinador", [
            "coordinadores" => $coordinadores
            ]);

    }

    public function store(Request $request) {

        $request->validate([
            "nif" => ["required"]
        ]);

        CoordinadorModel::create([
            "nif" => $request->nif,
            "nombre" => $request->name
        ]);

        return back();

    }
}
