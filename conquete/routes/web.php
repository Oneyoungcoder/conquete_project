<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/Clients', [ClientController::class, 'index']);

// Route::get('/Clients/{Client}/edit', [ClientController::class, 'edit']);

// Route::get('/Clients/create', [ClientController::class, 'create']);

// Route::put('/Clients/{Client}', [ClientController::class, 'update']);

// Route::post('/Clients', [ClientController::class, 'store']);
