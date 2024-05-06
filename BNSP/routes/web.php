<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/akun', [UserController::class, 'index'])->middleware(['auth'])->name('index');
    Route::get('/akun/create', [UserController::class, 'create'])->name('create');
    Route::post('/akun/store', [UserController::class, 'store'])->name('store');
    Route::get('/akun/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::delete('/akun/hapus/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::put('/akun/edit/{id}', [UserController::class, 'update'])->name('update');
    Route::resource('jurusan', JurusanController::class);
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', [AboutController::class, 'home'])->name('index.user');
    Route::get('/user/about', [AboutController::class, 'about'])->name('about');
    Route::get('/user/profile/{id}', [AboutController::class, 'index'])->name('user');
});

require __DIR__.'/auth.php';
