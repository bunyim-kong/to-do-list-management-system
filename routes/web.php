<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');


Route::get('/tasks', function (){
    return view('pages.tasks.index');
})->name('tasks.index');


Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');


Route::get('tests', [TestController::class, 'index']) ->name('tests.index');
Route::post('tests', [TestController::class, 'store']) ->name('tests.store');
