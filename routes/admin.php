<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\pagesController;
use App\Http\Controllers\Admin\widgetsController;
use App\Http\Controllers\Admin\settingsController;
use App\Http\Controllers\Admin\apperenceController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\HomePageSectionsController;

Route::prefix('admin')->group(function () {
    Route::get('/', [pagesController::class, 'index'])->name('admin.index');
    Route::get('/setting', [pagesController::class, 'setting'])->name('admin.setting');
    Route::get('/sociallinks', [pagesController::class, 'sociallinks'])->name('admin.sociallinks');
    Route::get('/principles', [widgetsController::class, 'principles'])->name('admin.principle');
    Route::post('/principles', [widgetsController::class, 'store_principle'])->name('store.principle');
    Route::get('/roadmaps', [widgetsController::class, 'roadmaps'])->name('admin.roadmap');
    Route::post('/roadmaps', [widgetsController::class, 'store_roadmaps'])->name('store.roadmap');
    Route::post('/uploadlarge-logo', [settingsController::class,'uploadlargeLogo'])->name('upload.largelogo');
    Route::post('/updateSetting', [settingsController::class,'updateSetting'])->name('setting.update');
    Route::post('/homeBannerSetting', [settingsController::class,'homeBannerSetting'])->name('setting.homeBanner');
    Route::post('/homeSection1', [settingsController::class,'homeSection1'])->name('setting.homeSection1');
    Route::post('/socialLinksSetting', [settingsController::class,'socialLinksSetting'])->name('sociallinks.createupdate');
    Route::post('/uploadmedium-logo', [settingsController::class,'uploadMediumLogo'])->name('upload.mediumlogo');
    Route::post('/uploadsmall-logo', [settingsController::class,'uploadSmallLogo'])->name('upload.smalllogo');
    Route::post('/uploadsocialmedia', [settingsController::class,'uploadSocialMediaInfo'])->name('upload.socialmedia');
    Route::get('/allpages', [pagesController::class, 'allpages'])->name('admin.allpages');
    Route::get('/addpage', [pagesController::class, 'addpage'])->name('admin.addpage');
    Route::get('/heroBanner', [pagesController::class, 'heroBanner'])->name('admin.heroBanner');
    Route::get('/createHomeSection1', [pagesController::class, 'createHomeSection1'])->name('admin.createHomeSection1');
    Route::delete('/homesection1Delete/{id}', [settingsController::class, 'destroy'])->name('admin.homesection1Delete');
    Route::patch('/homeSection1Update/{id}', [settingsController::class, 'updateHomeSection1'])->name('admin.homeSection1Update');
    Route::patch('/updateHomeSection1Data/{id}', [settingsController::class, 'updateHomeSection1Data'])->name('update.homeSection1Data');
    Route::get('/homesection1', [pagesController::class, 'homesection1'])->name('admin.homesection1');
    Route::patch('/homesection1update', [settingsController::class, 'homesection1'])->name('admin.homesection1updated');
    Route::get('/menus', [apperenceController::class, 'menus'])->name('admin.menus');
    Route::post('/update_sociallink/{id}', [settingsController::class,'updateImage'])->name('update.socialmedia');
    Route::post('/update-social-media', [settingsController::class,'uploadSocialMediaInfo'])->name('update.record');
    Route::get('pages/{id}/editor', [PageController::class,'editor'])->name('page.editor');



    // ******************************************** Home Page Admin Route Start ************************************************
    Route::get('/homesection2', [pagesController::class, 'homesection2'])->name('admin.homesection2');
    Route::post('/homeSection2', [settingsController::class,'homeSection2'])->name('setting.homeSection2');
    // ******************************************** Home Page Admin Route End **************************************************
    
    
    // ****************************************************** Home Section 3 working start *********************************************
    Route::get('/homesection3', [HomePageSectionsController::class, 'homesection3'])->name('admin.homesection3');
    Route::post('/homesection3data', [HomePageSectionsController::class, 'homesection3data'])->name('admin.homesection3data');
    // ****************************************************** Home Section 3 working end *********************************************
});

