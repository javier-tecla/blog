<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
