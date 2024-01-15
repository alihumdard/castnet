<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomePage\HomePageSection1Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection2Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection3Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection4Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection5Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection6Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection7Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection8Controller;
use App\Http\Controllers\Admin\HomePage\HomePageSection9Controller;
use App\Http\Controllers\Admin\HomePage\HomePageBannerController;
use App\Http\Controllers\Admin\AboutPage\AboutPageController;
use App\Http\Controllers\Admin\who_we_are\WhoWeArePageController;
use App\Http\Controllers\Admin\Team\TeamSectionController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PagesController;

use App\Http\Controllers\Admin\apperenceController;
use App\Http\Controllers\Admin\PageController;

Route::middleware('auth')->group(function() {
    Route::prefix('admin')->group(function () {
        Route::get('/administrator', [PagesController::class, 'login'])->name('admin.login');
        Route::get('/dashboard', [PagesController::class, 'index'])->name('admin.index');

        //---** Web setting **---//
        Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting');
        Route::put('/setting-update/{id}', [SettingController::class,'update'])->name('setting.update');

        //---** Social links **---//
        Route::get('/sociallinks', [SocialLinkController::class, 'index'])->name('admin.sociallinks');
        Route::put('/sociallinks-update/{id}', [SocialLinkController::class,'update'])->name('sociallinks.update');

        //---** Home page **---//
        Route::get('/homepage-banner', [HomePageBannerController::class,'index'])->name('homepage.banner');
        Route::put('/homebanner-update/{id}', [HomePageBannerController::class,'update'])->name('homebanner.update');
        Route::resource('homesection1', HomePageSection1Controller::class);
        Route::get('/homeSection2',[HomePageSection2Controller::class,'index'])->name('homesection2.index');
        Route::put('/homeSection2-update/{id}',[HomePageSection2Controller::class,'update'])->name('homesection2.update');
        Route::get('/homeSection3',[HomePageSection3Controller::class,'index'])->name('homesection3.index');
        Route::put('/homeSection3-update/{id}',[HomePageSection3Controller::class,'update'])->name('homesection3.update');
        Route::resource('homesection4', HomePageSection4Controller::class);
        Route::put('/homesection4-updation/{id}',[HomePageSection4Controller::class,'updation'])->name('homesection4.updataion');
        Route::resource('homesection5', HomePageSection5Controller::class);
        Route::put('/homesection5-updation/{id}',[HomePageSection5Controller::class,'updation'])->name('homesection5.updataion');
        Route::resource('homesection6', HomePageSection6Controller::class);
        Route::put('/homesection6-updation/{id}',[HomePageSection6Controller::class,'updation'])->name('homesection6.updataion');
        Route::get('/homeSection7', [HomePageSection7Controller::class,'index'])->name('homesection7.index');
        Route::put('/homeSection7-update/{id}', [HomePageSection7Controller::class,'update'])->name('homesection7.update');
        Route::resource('homesection8', HomePageSection8Controller::class);
        Route::put('/homesection8-updation/{id}',[HomePageSection8Controller::class,'updation'])->name('homesection8.updataion');
        Route::resource('homesection9', HomePageSection9Controller::class);
        Route::put('/homesection9-updation/{id}',[HomePageSection9Controller::class,'updation'])->name('homesection9.updataion');


        Route::get('/allpages', [PagesController::class, 'allpages'])->name('admin.allpages');
        Route::get('/addpage', [PagesController::class, 'addpage'])->name('admin.addpage');
        Route::get('/menus', [apperenceController::class, 'menus'])->name('admin.menus');
        Route::get('pages/{id}/editor', [PageController::class,'editor'])->name('page.editor');


        // --------- About Page Routes Start ------------
        Route::get('/about-us-banner', [AboutPageController::class, 'index'])->name('aboutus.banner');
        Route::get('/about-us-section1', [AboutPageController::class, 'section1'])->name('aboutus.section1');
        Route::get('/about-us-section2', [AboutPageController::class, 'section2'])->name('aboutus.section2');
        Route::get('/about-us-section3', [AboutPageController::class, 'section3'])->name('aboutus.section3');
        Route::put('/about-us/{id}', [AboutPageController::class, 'update'])->name('aboutus.update');
        // --------- About Page Routes End --------------


        // --------- who_we_are Page Routes Start ------------
        Route::get('/whoWeAre-banner', [WhoWeArePageController::class, 'index'])->name('whoWeAre.banner');
        Route::get('/who-we-are-section1', [WhoWeArePageController::class, 'section1'])->name('whoweare.section1');
        Route::get('/who-we-are-section2', [WhoWeArePageController::class, 'section2'])->name('whoweare.section2');
        Route::put('/who-we-are/{id}', [WhoWeArePageController::class, 'update'])->name('whoweare.update');
        // --------- who_we_are Page Routes End --------------

        //---** Our team **---//
        Route::resource('our-team', TeamSectionController::class);
        Route::get('/ourTeam-banner', [TeamSectionController::class, 'banner'])->name('ourTeam.banner');
        // --------- OUR TEAM Page Routes End --------------
       
        //---** My Blog **---//
        Route::resource('my-blog', BlogController::class);
        Route::get('/myBlog-banner', [BlogController::class, 'banner'])->name('myBlog.banner');
        // ---------My blog Page Routes End --------------


        Route::put('/banner-update/{id}', [BannerController::class, 'update'])->name('banner.update');
    });
});

