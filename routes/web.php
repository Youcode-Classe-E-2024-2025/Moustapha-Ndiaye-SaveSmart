<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;


// publics routes 
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);


// auth routes 
Route::middleware(['auth'])->group(function (){
    Route::get('profile', [AuthController::class, 'showProfilPage'])->name('user.profile');
    Route::get('dashboard/{id}', [AuthController::class, 'showDashboard']);
    Route::post('dashboard/{id}', [AuthController::class, 'showDashboard'])->name('user.dashboard');
    Route::post('dashboard/{id}', [AuthController::class, 'showDashboard'])->name('user.dashboard');


    // new user
    Route::post('newUser', [UserController::class, 'newUser']);
    Route::post('store', [TransactionController::class, 'store']);
    // Route::post('dashboard/{id}', [CategoryController::class, 'index'])->name('user.dashboard');

    // CRUD transactions
    Route::resource('transactions', TransactionController::class);
    Route::get('/dashboard/transactions/{transaction}/edit', [TransactionController::class, 'edit'])->name('dashboard.transactions.edit');

});

