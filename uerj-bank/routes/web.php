<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PixController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BankStatementController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/pix', [PixController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/extrato', [BankStatementController::class, 'index']);