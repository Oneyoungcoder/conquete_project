<?php

use App\Http\Controllers\BigController;
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


// Route::get('/inscription', 'App\Http\Controllers\BigController@create');
// Route::post('/inscription', 'App\Http\Controllers\BigController@store');

Route::get('create', [ BigController::class, 'create']);
Route::post('create' , [ BigController::class, 'store']);
Route::get('index', [BigController::class, 'index']);
