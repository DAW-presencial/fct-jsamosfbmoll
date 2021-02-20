<?php

use App\Models\CoordinadorModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/coordinador", function() {
    return CoordinadorModel::all();
});

Route::get("/coordinador/{idCoordinador}", function($idCoordinador) {
    if (! is_numeric($idCoordinador)) { 
        return ["status" => "error"];
    }
    return CoordinadorModel::where("id", $idCoordinador)->get();
});

Route::get("/coordinador/nif/{nifCoordinador}", function($nifCoordinador = "") {
    return CoordinadorModel::where("nif", strtoupper($nifCoordinador))->get();
});