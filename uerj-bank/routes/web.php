<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PixController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BankStatementController;


Route::redirect('/', '/login');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/pix/{name?}', [PixController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/sair', [LoginController::class, 'logout']);

Route::get('/extrato', [BankStatementController::class, 'index'])->middleware('auth');
