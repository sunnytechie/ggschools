<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/portal', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

//website pages
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/classes', [App\Http\Controllers\PageController::class, 'classes'])->name('classes');
Route::get('/facilities', [App\Http\Controllers\PageController::class, 'facility'])->name('facility');
Route::get('/teachers', [App\Http\Controllers\PageController::class, 'teacher'])->name('teacher');
Route::get('/appointments', [App\Http\Controllers\PageController::class, 'appointment'])->name('appointment');
Route::get('/contact-us', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/admission', [App\Http\Controllers\PageController::class, 'admission'])->name('admission');

Route::get('authorized/google', [App\Http\Controllers\Api\LoginWithGoogleController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('authorized/google/callback', [App\Http\Controllers\Api\LoginWithGoogleController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');

require __DIR__.'/auth.php';
