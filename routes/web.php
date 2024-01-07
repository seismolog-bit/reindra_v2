<?php

// use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Public\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');

Auth::routes();

Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    
    // Apps
    Route::resource('portfolio', App\Http\Controllers\Admin\PortfolioController::class)->parameters([
        'portfolio' => 'portfolio:slug',
    ]);
    Route::resource('portfolio-category', App\Http\Controllers\Admin\PortfolioCategoryController::class);
    Route::resource('experience', App\Http\Controllers\Admin\ExerienceController::class);
    Route::resource('pricing', App\Http\Controllers\Admin\PricingController::class);

    // Themes
    Route::resource('theme', App\Http\Controllers\Admin\ThemeController::class);
    Route::resource('theme-category', App\Http\Controllers\Admin\ThemeCategoryController::class);
    Route::resource('theme-tag', App\Http\Controllers\Admin\ThemeTagController::class);

    //Modules
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::resource('config', App\Http\Controllers\Admin\ConfigController::class);
});

