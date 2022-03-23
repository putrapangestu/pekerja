<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
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
//     return view('proses.list');
// });
// Route::get('/edit', function () {
//     return view('proses.edit');
// });

// Route::resource('proses', ProsesController::class);
// Route::post('coba/create', [ProsesController::class, 'store']);
// Route::get('proses/edit', [ProsesController::class, 'edit']);
//  Route::resource('gawe', GaweController::class);

// Route::get('/gawe', [GaweController::class, 'index']);
// Route::get('/gawe/index2', [GaweController::class, 'indexasli']);
// Route::get('/gawe/listings2', [GaweController::class, 'listings']);
// Route::get('/gawe/listings3', [GaweController::class, 'listingsumum']);
// Route::get('/gawe/listings2/listings-details1', [GaweController::class, 'listingsdetails']);
// Route::get('/gawe/listings3/listings-details', [GaweController::class, 'listingsdetailsumum']);
// Route::get('/gawe/blog1', [GaweController::class, 'blog']);
// Route::get('/gawe/blog', [GaweController::class, 'blogumum']);
// Route::get('/gawe/blog1/blog-detail1', [GaweController::class, 'blogdetails']);
// Route::get('/gawe/blog/blog-detail', [GaweController::class, 'blogdetailsumum']);
// Route::get('/gawe/contact1', [GaweController::class, 'contact']);
// Route::get('/gawe/contact', [GaweController::class, 'contactumum']);
// Route::get('/gawe/about1', [GaweController::class, 'about']);
// Route::get('/gawe/about', [GaweController::class, 'aboutumum']);
// Route::get('/gawe/login', [LoginController::class, 'index']);
// Route::get('/gawe/signup', [GaweController::class, 'registrasi']);
// Route::get('/gawe/recovery_password', [GaweController::class, 'lupapassword']);


// // 
// Route::get('/gawe/listings3', function() {
//     return view('gawe.listing3');
// });
// Route::get('/gawe/index3', function() {
//     return view('gawe.index3');
// });
// Route::get('/gawe/contact', function() {
//     return view('gawe.contact');
// });
// Route::get('/gawe/about', function() {
//     return view('gawe.about');
// });
// Route::get('/gawe/mail', function() {
//     return view('gawe.mail');
// });
// 

// Route::get('/gawe/listings2', [GaweController::class, 'index']);
// Route::get('/gawe/about1', [GaweController::class, 'index']);
// Route::get('/gawe/contact1', [GaweController::class, 'index']);
// Route::get('/gawe/mail', [GaweController::class, 'index']);

Auth::routes();

Route::get('/gawe', [GaweController::class, 'index']);

Route::get('/gawe/login', [LoginController::class, 'index']);
Route::post('/gawe/login', [LoginController::class, 'login']);

Route::get('/gawe/signup', [RegisterController::class, 'index']);
Route::post('/gawe/signup', [RegisterController::class, 'store']);

Route::get('/gawe/profile', [ProfileController::class, 'index']);
Route::get('/gawe/edit-profile', [ProfileController::class, 'edit']);
Route::post('/gawe/edit-profile', [ProfileController::class, 'general']);
Route::put('/gawe/edit-profile/{email}', [ProfileController::class, 'password']);

Route::get('/gawe/contact', [ContactController::class, 'index']);
Route::post('/gawe/contact', [ContactController::class, 'contact']);

Route::get('/gawe/mail', [MailController::class, 'index']);

Route::get('/gawe/listings3', [GaweController::class, 'listingsumum']);
// ->middleware('auth')
// ->middleware('guest')