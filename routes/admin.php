<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\pagesController;

Route::prefix('admin')->group(function () {
    Route::get('/', [pagesController::class, 'index'])->name('admin.index');
    Route::get('/principles', [pagesController::class, 'principle'])->name('admin.principle');
});
