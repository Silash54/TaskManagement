<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/task',[TaskController::class,'index'])->name('task.index');
Route::resource('category',CategoryController::class)->names('category');