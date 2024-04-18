<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserControler;
use  App\Http\Controllers\Chat_appController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('guest')->group(function () {
    Route::get('/register',[UserControler::class,'register'])->name('register');
Route::post('/register',[UserControler::class,'registerPost'])->name('register');
Route::get('/login',[UserControler::class,'login'])->name('login');
Route::post('/login',[UserControler::class,'loginpost'])->name('login');
});
Route::middleware('auth')->group(function () {
    Route::get('/home',[Chat_appController::class,'showindex'])->name('index');
Route::delete('/logout',[UserControler::class,'logout'])->name('logout');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
