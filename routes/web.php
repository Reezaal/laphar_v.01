<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoketController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Route::group(['mmiddleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'getHome'])->name('dashboard.home');
    Route::post('/logout', [AuthController::class, 'postLogout'])->name('logout');
});

Route::group(['middleware' => ['Loket']], function(){
    Route::get('/dashboard/loket', [LoketController::class, 'getLoket'])->name('laporan.loket');
    Route::post('/dashboard/loket/store', [LoketController::class, 'storeLoket'])->name('laporan.store');
    Route::put('/dashboard/loket/{loket:id}/put', [LoketController::class, 'putLoket'])->name('laporan.put');
    Route::delete('/dashboard/loket/delete', [LoketController::class, 'deleteLoket'])->name('laporan.delete');
});

Route::group(['middleware' => ['guest']], function(){
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('login.store');
});