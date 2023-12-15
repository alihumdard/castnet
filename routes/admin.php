<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\pagesController;
use App\Http\Controllers\Admin\widgetsController;
use App\Http\Controllers\Admin\settingsController;

Route::prefix('admin')->group(function () {
    Route::get('/', [pagesController::class, 'index'])->name('admin.index');
    Route::get('/setting', [pagesController::class, 'setting'])->name('admin.setting');
    Route::get('/principles', [widgetsController::class, 'principles'])->name('admin.principle');
    Route::post('/principles', [widgetsController::class, 'store_principle'])->name('store.principle');
    Route::post('/uploadlarge-logo', [settingsController::class,'uploadlargeLogo'])->name('upload.largelogo');
    Route::post('/uploadmedium-logo', [settingsController::class,'uploadMediumLogo'])->name('upload.mediumlogo');
    Route::post('/uploadsmall-logo', [settingsController::class,'uploadSmallLogo'])->name('upload.smalllogo');
});
