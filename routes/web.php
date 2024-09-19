<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::middleware(['guest'])->group(function(){
    Route::get('/',[AuthController::class,'index'])->name('login');
	Route::post('/login', [AuthController::class, 'login']);
});


Route::middleware(['auth'])->group(function(){
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard',[TemplateController::class,'index']);
});