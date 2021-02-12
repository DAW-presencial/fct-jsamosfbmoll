<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoordinadorController;
use App\Http\Controllers\RepresentanteController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\EmpresaController;

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

Route::get("/representante", [RepresentanteController::class, "index"]);

Route::get("/coordinador", [CoordinadorController::class, "index"]);

Route::get('/tutor', [TutorController::class, "index"]);

Route::get('/empresa', [EmpresaController::class, "index"]);