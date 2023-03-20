<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\PortfolioController::class, 'getPortfolio'])->name('portfolio');
Route::patch('/about-update', [App\Http\Controllers\PortfolioController::class, 'update_about'])->name('about-update');
