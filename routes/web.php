<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkShortenerController;

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

Route::name('link-shortener.')->prefix('link-shortener')->group(function() {
    Route::get('/', [LinkShortenerController::class, "index"])->name('index');
    Route::post('/', [LinkShortenerController::class, "submitUrl"])->name('submit');
});

Route::get('/', [HomeController::class, "index"])->name('index');

Route::get('/{shortUrl}', [HomeController::class, "redirectToUrl"])->name("redirect");
