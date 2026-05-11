<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');


Route::get('/tasks', function () {
    return view('pages.tasks.index');
})->name('tasks.index');


Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
