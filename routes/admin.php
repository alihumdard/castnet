<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\pagesController;
use App\Http\Controllers\Admin\widgetsController;

Route::prefix('admin')->group(function () {
    Route::get('/', [pagesController::class, 'index'])->name('admin.index');
    Route::get('/setting', [pagesController::class, 'setting'])->name('admin.setting');
    Route::get('/principles', [widgetsController::class, 'principles'])->name('admin.principle');
    Route::post('/principles', [widgetsController::class, 'store_principle'])->name('store.principle');
});
