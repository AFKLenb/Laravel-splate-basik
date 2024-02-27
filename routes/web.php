<?php

use Illuminate\Foundation\Application;
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

Route::middleware(['splade'])->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/admin', function () {
        return view('welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    });

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
        Route::view('/dashboard', 'dashboard')->name('dashboard');
        // Ресурный роут для services
        Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
        Route::resource('casees', \App\Http\Controllers\Admin\CaseeController::class);
        Route::resource('categories',\App\Http\Controllers\Admin\CategoryController::class );
        Route::resource('products',\App\Http\Controllers\Admin\ProductController::class );
        Route::resource('applications',\App\Http\Controllers\Admin\ApplicationController::class );
        Route::resource('reviews',\App\Http\Controllers\Admin\ReviewsController::class );
        Route::resource('partners',\App\Http\Controllers\Admin\PartnersController::class );
    });
    Route::get('/', [\App\Http\Controllers\Client\IndexController::class, 'index'])->name('client.index');
    Route::get('about', [\App\Http\Controllers\Client\IndexController::class, 'about'])->name('client.about');
    Route::get('services_client', [\App\Http\Controllers\Client\IndexController::class, 'services_client'])->name('client.services_client');
    Route::get('services_detail/{id}', [\App\Http\Controllers\Client\IndexController::class, 'services_detail'])->name('client.services_detail');
    Route::get('page_404', [\App\Http\Controllers\Client\IndexController::class, 'page_404'])->name('client.page_404');
    Route::get('soon', [\App\Http\Controllers\Client\IndexController::class, 'soon'])->name('client.soon');
    Route::get('contact', [\App\Http\Controllers\Client\IndexController::class, 'contact'])->name('client.contact');
    Route::get('fitback', [\App\Http\Controllers\Client\IndexController::class, 'fitback'])->name('client.fitback');
});
