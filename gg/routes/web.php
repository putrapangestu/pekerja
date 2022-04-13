<?php

use App\Http\Controllers\GabutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CobaController;
use App\http\Controllers\ContactController;
use App\Http\Controllers\RekrutController;
use App\Http\Controllers\GaweController;
use App\Http\Controllers\ProfileController;
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
Route::post('/listings', [GabutController::class, 'listings'])->name('listings');
Route::get('/detail-pekerja/{telepon}', [GabutController::class, 'listingsdetails'])->name('detail-pekerja');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/edit-profile/{email}', [ProfileController::class, 'edit'])->name('edit-profile');
Route::post('/edit-profile/{email}', [ProfileController::class, 'update'])->name('edit-profile');
Route::get('/rekrut/{email}', [RekrutController::class, 'index'])->name('rekrut')->middleware('auth');
Route::post('/merekrut/{email}', [RekrutController::class, 'store'])->name('merekrut');
Route::get('/inbox', [CobaController::class, 'index'])->name('inbox');
Route::get('inbox/{id}', [CobaController::class, 'detail_index'])->name('inbox-detail');
Route::post('inbox/{id}', [CobaController::class, 'balasan']);
Route::get("kontak", [ContactController::class, 'index'])->name('kontak');
Route::post('chat-kontak', [ContactController::class, 'contact'])->name('chat-kontak');
Route::get('tentang-kami', [GaweController::class, 'about'])->name('tentang-kami');
Route::get('/user',[AdminController::class, 'user']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
