<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;

// Main Page
Route::get('/', [PagesController::class, 'index']);

// Blog Routes
Route::resource('/blog', PostsController::class);

// Authentication
Auth::routes();

// Dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');
