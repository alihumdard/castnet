<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomePage\HomePageSection1Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection2Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection3Controller;
use App\Http\Controllers\Admin\HomePage\HomePageBannerController;
use App\Http\Controllers\Admin\AboutPage\AboutPageBannerController;
use App\Http\Controllers\Admin\AboutPage\AboutPageSection1Controller;
use App\Http\Controllers\Admin\AboutPage\AboutPageSection2Controller;
use App\Http\Controllers\Admin\AboutPage\AboutPageSection3Controller;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PagesController;

use App\Http\Controllers\Admin\widgetsController;
use App\Http\Controllers\Admin\apperenceController;
use App\Http\Controllers\Admin\PageController;

Route::prefix('admin')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('admin.index');

    //---** Web setting **---//
    Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting');
    Route::put('/setting-update/{id}', [SettingController::class,'update'])->name('setting.update');
    
    //---** Social links **---//
    Route::get('/sociallinks', [SocialLinkController::class, 'index'])->name('admin.sociallinks');
    Route::put('/sociallinks-update', [SocialLinkController::class,'update'])->name('sociallinks.update');

    //---** Home page **---//
    Route::get('/homepage-banner', [HomePageBannerController::class,'index'])->name('homepage.banner');
    Route::put('/homebanner-update/{id}', [HomePageBannerController::class,'update'])->name('homebanner.update');
    Route::resource('homesection1', HomePageSection1Controller::class);
    Route::get('/homeSection2',[HomePageSection2Controller::class,'index'])->name('homesection2.index');
    Route::put('/homeSection2-update/{id}',[HomePageSection2Controller::class,'update'])->name('homesection2.update');
    Route::get('/homeSection3',[HomePageSection3Controller::class,'index'])->name('homesection3.index');
    Route::put('/homeSection3-update/{id}',[HomePageSection3Controller::class,'update'])->name('homesection3.update');


    Route::get('/roadmaps', [widgetsController::class, 'roadmaps'])->name('admin.roadmap');
    Route::post('/roadmaps', [widgetsController::class, 'store_roadmaps'])->name('store.roadmap');
    
    Route::get('/allpages', [PagesController::class, 'allpages'])->name('admin.allpages');
    Route::get('/addpage', [PagesController::class, 'addpage'])->name('admin.addpage');
    Route::get('/menus', [apperenceController::class, 'menus'])->name('admin.menus');
    Route::get('pages/{id}/editor', [PageController::class,'editor'])->name('page.editor');
    
    
    // --------- About Page Routes Start ------------
    Route::get('/aboutUs-banner', [AboutPageBannerController::class, 'index'])->name('aboutUs.banner');
    Route::get('/aboutUs-section1', [AboutPageSection1Controller::class, 'index'])->name('aboutUs.section1');
    Route::get('/aboutUs-section2', [AboutPageSection2Controller::class, 'index'])->name('aboutUs.section2');
    Route::get('/aboutUs-section3', [AboutPageSection3Controller::class, 'index'])->name('aboutUs.section3');
    // --------- About Page Routes End --------------


    // --------- who_we_are Page Routes Start ------------

    // --------- who_we_are Page Routes End --------------

    // --------- who_we_are Page Routes Start ------------

    // --------- who_we_are Page Routes End --------------
});

