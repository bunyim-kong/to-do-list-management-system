<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('dashboard.index');
});


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard.index');


// // Tasks
// Route::get('/tasks', [TaskController::class, 'index'])
//     ->name('tasks.index');

// Route::get('/tasks/create', [TaskController::class, 'create'])
//     ->name('tasks.create');

// Route::post('/tasks', [TaskController::class, 'store'])
//     ->name('tasks.store');

// Route::get('/tasks/{id}', [TaskController::class, 'show'])
//     ->name('tasks.show');