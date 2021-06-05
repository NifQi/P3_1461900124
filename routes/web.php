<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
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

// Route::get('pasien1461900124', 'PasienController@index');
// Route::get('pasien1461900124/tambahpasien1461900124', 'PasienController@tambah');

Route::resource('pasien1461900124', PasienController::class);
Route::resource('tambahpasien1461900124', PasienController::class);
Route::resource('editpasien1461900124', PasienController::class);
Route::get('/pasien1461900124/hapus/{id}',
[PasienController::class, 'destroy']);
Route::resource('dokter1461900124', DokterController::class);