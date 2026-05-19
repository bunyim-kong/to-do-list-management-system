<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

// Auth Routes
Route::get('/', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

// Dashboard Route
Route::get('/dashboard', function(){
    $tasks = Task::where('user_id', Auth::id())->orderBy('due_date', 'asc')->get();
    return view('dashboard.index', compact('tasks'));
})->name('dashboard');

// Tasks Route
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::get('/tasks/{id}/edit-data', [TaskController::class, 'editData'])->name('tasks.edit-data');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::post('/tasks/{id}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('/tasks/completed', [TaskController::class, 'completedTasks'])->name('tasks.completed');

// Logout Route
Route::post('/logout', function(){
    Auth::logout();
    return redirect()->route('login');
})->name('logout');