<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});



// login
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('register.action');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login_action'])->name('login.action');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




// dashboard
Route::namespace('App\Http\Controllers')->group(function () {
    Route::group(['middleware' => ['auth']], function () {
        
        Route::get('/dashboard', [LoginController::class, 'halaman_user'])->name('dashboard');

        // route tema1
        Route::get('/tema', [TemaController::class, 'index'])->name('index.tema');
        Route::get('/tema/create', [TemaController::class, 'create'])->name('create.tema');
        Route::post('/tema', [TemaController::class, 'store'])->name('store.tema');
        Route::get('/tema/edit/{id}', [TemaController::class, 'edit'])->name('edit.tema');
        Route::get('/tema/show/{id}', [TemaController::class, 'show'])->name('show.tema');
        Route::post('/tema/update/{id}', [TemaController::class, 'update'])->name('update.tema');
        Route::delete('/tema/{id}', [TemaController::class, 'destroy'])->name('destroy.tema');
        
        // route tema2
        Route::get('/tema2/show/{id}', [TemaController::class, 'show2'])->name('show.tema2');

    });
});