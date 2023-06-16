<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\HomeController;
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
// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Home Page | User / Guests

//firsts
Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/create', [DashboardController::class, 'index']);



//tables
Route::resource('/admin/visimisi', VisimisiController::class);
Route::resource('/admin/berita', BeritaController::class);
Route::resource('/admin/pengurus', PengurusController::class);
Route::resource('/berita', BeritaController::class)->middleware('auth');
Route::resource('/visimisi', VisimisiController::class)->middleware('auth');
Route::resource('/pengurus', PengurusController::class)->middleware('auth');

// create
// Route::post('/pengurus', PengurusController::class)->middleware('auth');

Route::get('/frontend/main', function () {
    return view('frontend.main');
});


Route::get('/admin/app', function () {
    return view('admin.app');
});