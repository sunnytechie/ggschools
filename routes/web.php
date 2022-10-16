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
//Result Portal
Route::get('/portal', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::put('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('update.profile')->middleware('auth');
Route::put('/token/{user}', [App\Http\Controllers\TokenController::class, 'update'])->name('update.token')->middleware('auth');
Route::post('/result', [App\Http\Controllers\ResultCheckController::class, 'checkResult'])->name('checkResult')->middleware('auth');
Route::get('/upload', [App\Http\Controllers\AdminController::class, 'index'])->name('upload.result')->middleware('auth');
//Imports
Route::post('result-import', [App\Http\Controllers\AdminController::class, 'resultImport'])->name('result.import')->middleware('auth');
Route::post('student-import', [App\Http\Controllers\AdminController::class, 'studentImport'])->name('student.import')->middleware('auth');
//PDFs
Route::post('pdf', [App\Http\Controllers\PdfController::class, 'pdf'])->name('pdf')->middleware('auth');
//Route::get('pdfview',array('as'=>'pdfview','uses'=>'PdfController@pdfview'));

//Website Pages
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/classes', [App\Http\Controllers\PageController::class, 'classes'])->name('classes');
Route::get('/facilities', [App\Http\Controllers\PageController::class, 'facility'])->name('facility');
Route::get('/teachers', [App\Http\Controllers\PageController::class, 'teacher'])->name('teacher');
Route::get('/appointments', [App\Http\Controllers\PageController::class, 'appointment'])->name('appointment');
Route::get('/contact-us', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/admission', [App\Http\Controllers\PageController::class, 'admission'])->name('admission');

Route::get('authorized/google', [App\Http\Controllers\Api\LoginWithGoogleController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('authorized/google/callback', [App\Http\Controllers\Api\LoginWithGoogleController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');

//Email Route
Route::post('/appointment', [App\Http\Controllers\EmailController::class, 'appointment'])->name('email.appointment');
Route::post('/subscriber', [App\Http\Controllers\EmailController::class, 'subscriber'])->name('email.subscriber');
Route::post('/contact', [App\Http\Controllers\EmailController::class, 'contact'])->name('email.contact');
//End Email Route

require __DIR__.'/auth.php';
