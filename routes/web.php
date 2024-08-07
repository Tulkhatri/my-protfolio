<?php

use App\Http\Controllers\FrontPanel\AboutUsController;
use App\Http\Controllers\FrontPanel\HomePageController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return "Cache is cleared";
});

Route::get('/', [HomePageController::class, 'index'])->name('frontpanel.homepage');
Route::get('/about-me', [AboutUsController::class, 'index'])->name('frontpanel.about-me');
