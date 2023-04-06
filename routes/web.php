<?php

use App\Http\Controllers\CetakController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\UserController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'store']);

Route::resource('dashboard', DashboardController::class);

Route::get('user', [UserController::class, 'index']);

Route::get('createuser', [UserController::class, 'show']);
Route::post('createuser', [UserController::class, 'store']);

Route::get('/lapor', [LaporanController::class, 'index']);
Route::post('/lapor', [LaporanController::class, 'store']);
Route::get('/laporan', [LaporanController::class, 'show']);
Route::get('delete/{id}', [LaporanController::class, 'destroy']);
Route::get('detail/{id}', [detailController::class, 'index']);
Route::get('edit/{id}', [LaporanController::class, 'edit']);
Route::get('edit/{id}', [LaporanController::class, 'update']);

Route::get('/detail', function () {
    return view('admin.tanggapan.index');
});

// Route::get('/edit', function () {
//     return view('lapor.edit');
// });


Route::get('tanggapan/{id}', [TanggapanController::class, 'index']);
Route::post('tanggapan/{id}', [TanggapanController::class, 'store']);

Route::get('cetak/{id}', [CetakController::class, 'index']);

Route::get('/', function () {
    return view('home.index', [
        "title" => "Home",
        "active" => "home"
    ]);
});

// Route::get('/tanggapan', function () {
//     return view('admin.tanggapan.index');
// });;


// Route::get('/verif', function () {
//     return view('admin/verifikasi', [
//         'title' => 'verifikasi'
//     ]);
// });
