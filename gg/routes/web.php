<?php

use App\Http\Controllers\GabutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\WishlistController;
use App\http\Controllers\ContactController;
use App\Http\Controllers\RekrutController;
use App\Http\Controllers\GaweController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginAdminController;
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

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [GaweController::class, 'index'])->name('/');
Route::post('/', [GaweController::class, 'notif']);
Route::get('/listings', [GabutController::class, 'listings'])->name('listings');
Route::post('/listings/{email}', [WishlistController::class, 'create'])->name('wishlist');
Route::post('wishlist', [WishlistController::class, 'store'])->name('hapus-wishlist');
Route::get('/detail-pekerja/{email}', [GabutController::class, 'listingsdetails'])->name('detail-pekerja');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile-perusahaan/{email}', [ProfileController::class, 'perusahaan'])->name('profile-perusahaan');
Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('edit-profile');
Route::post('/edit-profile', [ProfileController::class, 'update'])->name('edit-profile');
Route::get('/edit-password/{email}', [ProfileController::class, 'edit_password'])->name('edit-password');
Route::post('/edit-password/{email}', [ProfileController::class, 'update_password'])->name('edit-password');
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
Route::get('notifikasi',[GaweController::class, 'notipikasi']);
Route::get('wishlist', [WishlistController::class, 'index']);
Route::post('wishlist', [WishlistController::class, 'store'])->name('hapus-wishlist');
Route::get('profile-perusahaan/{email}', [ProfileController::class, 'perusahaan'])->name('profile-perusahaan');
Route::get('profiles', [ProfileController::class, 'perusahaan'])->name('profiles');


Route::get('admin', [LoginAdminController::class, 'adminLogin'])->name('login-admin');
Route::post('admin', [LoginAdminController::class, 'AdminPostLogin'])->name('login-admin');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::get('login', [LoginController::class, 'getLogin'])->name('login');
Route::post('login', [LoginController::class, 'postLogin'])->name('login');
Route::get('password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');


Route::middleware(['auth:admin'])->group(function () {
    Route::post('logout-admin', [LoginAdminController::class, 'logout'])->name('logout-admin');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [AdminController::class, 'user'])->name('user');
    Route::get('/blog', [AdminController::class, 'blog']);
    Route::get('/blog/create', [AdminController::class, 'create']);
    Route::get('/admin/user/delete/{id}', [AdminController::class, 'delete']);
    Route::get('/admin/inbox', [ContactController::class, 'inbox_index']);
    Route::get('/admin/inbox/{id}', [ContactController::class, 'inbox_detail']);
    Route::get('/admin/inbox/{id}/seen', [ContactController::class, 'inbox_seen']);
});


// Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function(){
//     Route::get('/dashboard', [AdminController::class, 'dashboard']);
// });
// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
