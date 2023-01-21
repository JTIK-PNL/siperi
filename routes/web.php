<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanJudulController;
use App\Http\Controllers\ProfileController;
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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('auth.login');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pengajuan-judul', [PengajuanJudulController::class, 'edit'])->name('pengajuan-judul.edit');
    Route::post('/pengajuan-judul', [PengajuanJudulController::class, 'store'])->name('pengajuan-judul.store');
    Route::get('/pengajuan-judul', [PengajuanJudulController::class, 'create'])->name('pengajuan-judul.create');
    Route::get('/pengajuan-judul-rekap', [PengajuanJudulController::class, 'rekap'])->name('pengajuan-judul.rekap');
});

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

