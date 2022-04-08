<?php

use App\Http\Controllers\GabutController;
use App\Http\Controllers\GaweController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [GaweController::class, 'index'])->name('/');
Route::get('/listings', [GabutController::class, 'listings'])->name('listings');
Route::get('/detail/{telepon}', [GabutController::class, 'listingsdetails'])->name('detail');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
