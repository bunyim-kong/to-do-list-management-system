<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

Route::get('/test', [TestController::class, 'index']);
Route::post('/test', [TestController::class, 'store'])->name('test.store');
Route::get('/test/edit/{id}', [TestController::class, 'edit'])->name('test.edit');
Route::put('/test/update/{test}', [TestController::class, 'update'])->name('test.update');

Route::get('/', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register',[AuthController::class, 'register'])->name('register.store');

Route::get('/dashboard', function(){
    return view('dashboard.index');
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

