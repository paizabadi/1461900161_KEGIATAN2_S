<?php

use App\Http\Controllers\selectController;
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

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/', function () {
    return view('home0164');
});

Route::get('/artikel', function () {
    return view('artikel0164');
});

Route::get('/kontak', function () {
    return view('kontak0164');
});
Route::get('/mahasiswa', [usercontroller::class,'index']);
Route::get('/mahasiswa/tambah', [usercontroller::class,'tambah']);
Route::get('/mahasiswa/hapus/{id}', [usercontroller::class,'hapus']);
Route::post('/mahasiswa/store',[usercontroller::class,'store']);
Route::get('/mahasiswa/edit/{id}',[usercontroller::class,'edit']);
Route::post('/mahasiswa/update',[usercontroller::class,'update']);
Route::get('/mahasiswa/cari',[usercontroller::class,'cari']);