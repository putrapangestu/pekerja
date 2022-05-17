<?php

use App\Http\Controllers\GabutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CobaController;
use App\http\Controllers\ContactController;
use App\Http\Controllers\RekrutController;
use App\Http\Controllers\GaweController;
use App\Http\Controllers\LoginController;
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


// Auth::routes();
Route::get('login', [LoginController::class, 'getLogin'])->name('login');
Route::post('login', [LoginController::class, 'postLogin'])->name('login');
Route::post('logout', [LoginController::class, 'logout']);
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [GaweController::class, 'index'])->name('/');
Route::get('/listings', [GabutController::class, 'listings'])->name('listings');
Route::get('/detail-pekerja/{email}', [GabutController::class, 'listingsdetails'])->name('detail-pekerja');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/edit-profile/{email}', [ProfileController::class, 'edit'])->name('edit-profile');
Route::post('/edit-profile/{email}', [ProfileController::class, 'update'])->name('edit-profile');
Route::get('/rekrut/{email}', [RekrutController::class, 'index'])->name('rekrut')->middleware('auth');
Route::post('/merekrut/{email}', [RekrutController::class, 'store'])->name('merekrut');
Route::get('/inbox', [CobaController::class, 'index'])->name('inbox');
Route::post('/inbox/{id}/star', [CobaController::class, 'star_inbox']);
Route::get('/inbox_in', [CobaController::class, 'index'])->name('inbox-in');
Route::get('/inbox_out', [CobaController::class, 'index'])->name('inbox-out');
Route::get('/inbox_star', [CobaController::class, 'index'])->name('inbox-star');
Route::get('/inbox_trash', [CobaController::class, 'index'])->name('inbox-trash');
Route::get('inbox/{id}', [CobaController::class, 'detail_index'])->name('inbox-detail');
Route::post('inbox/{id}', [CobaController::class, 'balasan']);
Route::get('inbox/{id}/seen', [CobaController::class, 'seen']);
Route::get("kontak", [ContactController::class, 'index'])->name('kontak');
Route::post('chat-kontak', [ContactController::class, 'contact'])->name('chat-kontak');
Route::get('tentang-kami', [GaweController::class, 'about'])->name('tentang-kami');
Route::get('profile-perusahaan/{email}', [ProfileController::class, 'perusahaan'])->name('profile-perusahaan');
Route::get('profiles', [ProfileController::class, 'perusahaan'])->name('profiles');
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/user', [AdminController::class, 'user']);
Route::get('/blog', [AdminController::class, 'blog']);

// Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function(){
//     Route::get('/dashboard', [AdminController::class, 'dashboard']);
// });
// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
