<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CoordinadorController;
use App\Http\Controllers\RepresentanteController;
use App\Http\Controllers\CentroDeTrabajoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get("/representante", [RepresentanteController::class, "index"])->name("representante");
Route::post('/representante', [RepresentanteController::class, "store"]);

Route::get("/coordinador", [CoordinadorController::class, "index"])->name("coordinador");
Route::post("/coordinador", [CoordinadorController::class, "store"]);

Route::get('/tutor', [TutorController::class, "index"])->name("tutor");

Route::get('/empresa', [EmpresaController::class, "index"])->name("empresa");

Route::get('/centro-de-trabajo', [CentroDeTrabajoController::class, "index"])->name("centro-de-trabajo");