<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourPdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/setup', function () {
    return view('setup');
})->name('setup');

Route::get('/userdit', function () {
    return view('useredit');
})->name('useredit');

Route::get('/pdf2coba', function () {
    return view('pdf2coba');
})->name('pdf2coba');


Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/pdf', [YourPdfController::class, 'Pdf'])->name('pdf');
