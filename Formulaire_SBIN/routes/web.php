<?php

use App\Http\Controllers\PersonneMoraleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnePhysiqueController;
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
    return view('welcome');
});

Route::get('/physiques', [PersonnePhysiqueController::class, 'index']);


Route::get('/physiques/create', [PersonnePhysiqueController::class, 'create']);

Route::put('/physiques/{physique}', [PersonnePhysiqueController::class, 'update']);

Route::get('/physiques/{physique}/edit', [PersonnePhysiqueController::class, 'edit']);

Route::post('/physiques', [PersonnePhysiqueController::class, 'store']);

Route::delete('/physiques/{physiques}', [PersonnePhysiqueController::class, 'destroy']);
