<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\BigController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
});

/*
Route::get('create', [ BigController::class, 'create']);
//Route::post('create' , [ BigController::class, 'store']);
Route::get('index', [BigController::class, 'index']);
Route::get('{big}/edit', [BigController::class, 'edit']);
Route::put('/{big}', [BigController::class, 'update']);
*/
Route::resource('BigController', BigController::class);