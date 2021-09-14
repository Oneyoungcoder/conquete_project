<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Personne_physiqueController;

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

  Route::get('/clients', [Personne_physiqueController::class, 'index']);

  Route::get('/clients/{client}/edit', [Personne_physiqueController::class, 'edit']);
  Route::get('/clients/create', [Personne_physiqueController::class, 'create']);
  Route::put('/clients/{client}', [Personne_physiqueController::class, 'update']);
  Route::post('/clients', [Personne_physiqueController::class, 'store']);
