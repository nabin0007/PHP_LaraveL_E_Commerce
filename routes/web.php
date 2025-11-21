<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\SliderController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// -------------------------
// User Authentication
// -------------------------
Route::prefix('auth')->group(function () {
    // Register routes
    Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [UserController::class, 'register'])->name('register');

    // Login routes
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [UserController::class, 'login'])->name('login');

    // Logout
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

// -------------------------
// Frontend: Home Page
// -------------------------
Route::get('/', [HomeController::class, 'index'])->name('home');

// -------------------------
// API-like Endpoints (Optional)
// -------------------------
//Route::get('/sliders', [SliderController::class, 'index'])->name('slider.index');

//Route::get('/navbar', [NavbarController::class, 'index'])->name('navbar.index');
// -------------------------
// Categories (Dynamic Section + Admin CRUD)
// -------------------------
//Route::resource('categories', CategoryController::class);

//Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


use App\Http\Controllers\BannerSectionController;

// API-like route (যদি AJAX বা JSON return করতে চাও)
//Route::get('/featured-sections', [FeaturedSectionController::class, 'index'])->name('featured.index');


//use App\Http\Controllers\ProductController;

//Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

use App\Helpers\ImageOptimizer;

Route::get('/optimize-images', function () {
    ImageOptimizer::bulkOptimize('assets/images', 1280, 720);
    return 'All images optimized!';
});
