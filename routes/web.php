<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login-page');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register-page');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/rooms/{name}', [RoomTypeController::class, 'showDetails'])->name('room-details');
Route::post('/reservations', [ReservationController::class, 'store'])->name('add-reservation');

Route::get('/admin', function() {
    return view('admin.home');
})->name('admin-home')->middleware('can:view_admin_page');

Route::get('/admin/reservations', [ReservationController::class, 'showAll'])->name('admin-reservations')->middleware('can:view_admin_page');

Route::get('/admin/rooms', [RoomController::class, 'showAll'])->name('admin-rooms')->middleware('can:view_admin_page');
Route::post('/admin/rooms', [RoomController::class, 'create'])->name('admin-add-room')->middleware('can:view_admin_page');

Route::get('/admin/room-types/update', [RoomTypeController::class, 'showAll'])->name('admin-room-types-update-get')->middleware('can:view_admin_page');
Route::post('/admin/room-types/update/{id}', [RoomTypeController::class, 'updatePrice'])->name('admin-room-types-update-post')->middleware('can:view_admin_page');

Route::get('/admin/offers', [OfferController::class, 'show'])->name('admin-offers')->middleware('can:view_admin_page');
Route::post('/admin/offers', [OfferController::class, 'create'])->name('admin-add-offers')->middleware('can:view_admin_page');

Route::get('/admin/news', [NewsController::class, 'show'])->name('admin-news')->middleware('can:view_admin_page');
Route::post('/admin/news', [NewsController::class, 'create'])->name('admin-add-news')->middleware('can:view_admin_page');
