<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DudiController;
use App\Http\Controllers\PklController;

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

Route::resource('/siswa', SiswaController::class);
Route::resource('/dudi', DudiController::class);
Route::resource('/pkl', PklController::class);

Route::get('sesi', [SessionController::class, 'index']);
Route::post('sesi/login', [SessionController::class, 'login']);
Route::get('sesi/logout', [SessionController::class, 'logout']);
Route::post('/sesi/confirm-logout', [SessionController::class, 'confirmLogout']);
Route::get('sesi/register', [SessionController::class, 'register']);
Route::post('sesi/register', [SessionController::class, 'create']);

