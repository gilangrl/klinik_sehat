<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\TemplateController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});


Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/dashboard', [TemplateController::class, 'index'])->name('dashboard.index');
        Route::get('/dashboard_isi', [TemplateController::class, 'dashboard'])->name('dashboard.isi');

        // OBAT
        Route::get('/obat', [ObatController::class, 'index'])->name('dashboard.obat');
        Route::get('/obat_add', [ObatController::class, 'create'])->name('dashboard.add_obat');

        // PASIEN
        Route::get('/pasien', [PasienController::class, 'index'])->name('dashboard.pasien');
        Route::get('/pasien_add', [PasienController::class, 'create'])->name('dashboard.pasien_add');
    });
});
