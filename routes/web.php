<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [PortfolioController::class, 'Home']);
Route::get('/', [PortfolioController::class, 'Home']);
Route::get('/about', [PortfolioController::class, 'About']);
Route::get('/projects', [PortfolioController::class, 'Projects']);
Route::get('/contact', [PortfolioController::class, 'Contact']);
