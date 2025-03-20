<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\DIYToyController;
use App\Http\Controllers\CareGuideController;
use App\Http\Controllers\ProductReviewController;


// Main Page
Route::get('/', [PagesController::class, 'index']);

// Blog Routes
Route::resource('/blog', PostsController::class);

// Authentication
Auth::routes();

// Dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Adoption Corner
Route::get('/adoption', [AdoptionController::class, 'index'])->name('adoption.index');
Route::get('/adoption/{cat}', [AdoptionController::class, 'show'])->name('adoption.show');
Route::post('/adoption/apply', [AdoptionController::class, 'apply'])->name('adoption.apply');


// Cat Care Guide
Route::get('/care-guides', [CareGuideController::class, 'index'])->name('care.index');
Route::get('/care-guides/{guide}', [CareGuideController::class, 'show'])->name('care.show');

// DIY Toys
Route::get('/diy-toys', [DIYToyController::class, 'index'])->name('diy.index');
Route::get('/diy-toys/{toy}', [DIYToyController::class, 'show'])->name('diy.show');

// Product Reviews
Route::get('/reviews', [ProductReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ProductReviewController::class, 'create'])->middleware('auth');
Route::post('/reviews', [ProductReviewController::class, 'store'])->middleware('auth');
