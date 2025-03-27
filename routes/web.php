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

// Adoption Routes
Route::prefix('adoption')->group(function () {
    Route::get('/', [AdoptionController::class, 'index'])->name('adoption.index');
    Route::get('/{id}', [AdoptionController::class, 'show'])->name('adoption.show');
    Route::get('/{id}/apply', [AdoptionController::class, 'applicationForm'])->name('adoption.application');
    Route::post('/apply', [AdoptionController::class, 'apply'])->name('adoption.apply.submit');
});
// Add these routes inside your auth middleware group
Route::middleware(['auth'])->group(function () {
    // Show create form
    Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
    Route::post('/blog', [PostsController::class, 'store'])->name('blog.store');
Route::get('/blog/{post}', [PostsController::class, 'show'])->name('blog.show');
});

Route::get('/care-guides', [CareGuideController::class, 'index'])->name('care.index');
Route::get('/care-guides/{guide}', [CareGuideController::class, 'show'])->name('care.show');

// DIY Toys
Route::get('/diy-toys', [DIYToyController::class, 'index'])->name('diy.index');
Route::get('/diy-toys/{toy}', [DIYToyController::class, 'show'])->name('diy.show');

// Product Reviews
Route::prefix('reviews')->group(function() {
    Route::get('/', [ProductReviewController::class, 'index'])->name('reviews.index');
    Route::middleware('auth')->group(function() {
        Route::get('/create', [ProductReviewController::class, 'create'])->name('reviews.create');
        Route::post('/', [ProductReviewController::class, 'store'])->name('reviews.store');
    });
    Route::get('/{review}', [ProductReviewController::class, 'show'])->name('reviews.show');
});
// google auth

Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);
