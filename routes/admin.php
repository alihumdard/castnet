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
use App\Http\Controllers\Admin\Event_calender\EventCalenderSection2Controller;
use App\Http\Controllers\Admin\Event_calender\EventCalenderController;
use App\Http\Controllers\Admin\Events\EventSection1Controller;
use App\Http\Controllers\Admin\AboutPage\AboutPageController;
use App\Http\Controllers\Admin\advocacy\AdvocacySection1Controller;
use App\Http\Controllers\Admin\Who_we_are\WhoWeArePageController;
use App\Http\Controllers\Admin\Join\JoinSection1Controller;
use App\Http\Controllers\Admin\benefits\BenefitsSection1Controller;
use App\Http\Controllers\Admin\Join\JoinSection1LevelController;
use App\Http\Controllers\Admin\Evaluation\EvaluationSection1Controller;
use App\Http\Controllers\Admin\Rules_of_engagement\RulesOfEngagementSection1Controller;
use App\Http\Controllers\Admin\Membership\MembershipSection2Controller;
use App\Http\Controllers\Admin\WidgetsController;
use App\Http\Controllers\Admin\Team\TeamSectionController;
use App\Http\Controllers\Admin\Events\OurEventController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\apperenceController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\programs\ProgramsSection1Controller;
use App\Http\Controllers\Admin\small_businesses\SmallBusinessesSection1Controller;
use App\Http\Controllers\Admin\support_services\SupportServicesSection1Controller;
use App\Http\Controllers\Admin\veterans\VeteransSection1Controller;
use App\Http\Controllers\Admin\women\WomenSection1Controller;

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

        //---** My Events **---//
        Route::get('/myEvent-banner', [EventSection1Controller::class, 'banner'])->name('myEvent.banner');
        Route::get('/myEvent-section1', [EventSection1Controller::class, 'section1'])->name('myEvent.section1');
        Route::get('/myEvent-section3', [EventSection1Controller::class, 'section3'])->name('myEvent.section3');
        Route::put('/myEvent-update/{id}', [EventSection1Controller::class, 'update'])->name('myEvent.update');
        Route::resource('our-event', OurEventController::class);

        Route::resource('event-calender', EventCalenderController::class);
        Route::get('/event-calender-banner', [EventCalenderController::class, 'banner'])->name('event-calender.banner');
        Route::get('/event-calender-section2-index', [EventCalenderSection2Controller::class, 'index'])->name('event-calender-section2.index');
        Route::put('/event-calender-section2/{id}', [EventCalenderSection2Controller::class, 'update'])->name('event-calender-section2.update');
        // ---------My Events Page Routes End --------------

        // ---- Membership page routes start ----
        Route::resource('membershipSection2', MembershipSection2Controller::class);
        Route::get('/membershipSection2-banner', [MembershipSection2Controller::class, 'banner'])->name('membershipSection2.banner');
        Route::get('/membership-section1', [MembershipSection2Controller::class, 'section1'])->name('membership.section1');
        // ---- Membership page routes end ----

        // ---- Join page routes start ----

        Route::resource('joinSection1', JoinSection1LevelController::class);
        Route::get('/join-banner', [JoinSection1Controller::class, 'banner'])->name('join.banner');
        // ---- Join page routes end ----

        // ---- MEMBERSHIP EVALUATION page routes start ----
        Route::get('/evaluationsection1', [EvaluationSection1Controller::class, 'section1'])->name('evaluation.section1');
        Route::get('/evaluationsection3', [EvaluationSection1Controller::class, 'section3'])->name('evaluation.section3');
        // Route::get('/evaluationsection5', [EvaluationSection1Controller::class, 'section5'])->name('evaluation.section5');
        Route::get('/evaluationsection5', [EvaluationSection1Controller::class, 'section5'])->name('evaluation.section5');
        Route::get('/evaluation-banner', [EvaluationSection1Controller::class, 'banner'])->name('evaluation.banner');
        // ---- MEMBERSHIP EVALUATION page routes end ----

        // ---- RULES OF ENGAGEMENT page routes start ----
        Route::get('/roe-section1', [RulesOfEngagementSection1Controller::class, 'section1'])->name('roe.section1');
        Route::get('/roe-banner', [RulesOfEngagementSection1Controller::class, 'banner'])->name('roe.banner');
        // ---- RULES OF ENGAGEMENT page routes end ----

        // ------- JOIN widget work start --------
        Route::get('/joinWidget', [WidgetsController::class, 'index'])->name('joinWidget');
        Route::put('/joinWidget-update/{id}', [WidgetsController::class, 'udpateJoinWidget'])->name('joinWidget.update');
        // ------- JOIN widget work end --------

        ///**-- Common Functions --**///
        Route::put('/c-section1/{id}', [AboutPageController::class, 'update'])->name('c-section1.update');
        Route::put('/banner-update/{id}', [BannerController::class, 'update'])->name('banner.update');


        // benefits page routes start
        Route::get('/benefits-banner', [BenefitsSection1Controller::class, 'banner'])->name('benefits.banner');
        // benefits page routes end


        // ADVOCACY page routes start
        Route::get('/advocacy-banner', [AdvocacySection1Controller::class, 'banner'])->name('advocacy.banner');
        // ADVOCACY page routes end



        //Small Business routes start
        Route::get('/smallBusiness-banner', [SmallBusinessesSection1Controller::class, 'banner'])->name('smallBusiness.banner');
        //Small Business routes end


        //WOMEN ADVOCACY page routes start
        Route::get('/womenAdvocacy-banner', [WomenSection1Controller::class, 'banner'])->name('womenAdvocacy-banner');
        //WOMEN ADVOCACY page routes end


        //VETERANS ADVOCACY page routes start
        Route::get('/veterans-banner', [VeteransSection1Controller::class, 'banner'])->name('veterans-banner');
        //VETERANS ADVOCACY page routes end



        //SUPPORT SERVICES page routes start
        Route::get('/supportServices-banner', [SupportServicesSection1Controller::class, 'banner'])->name('supportServices-banner');
        //SUPPORT SERVICES page routes end



        Route::get('programs-banner',[ProgramsSection1Controller::class,'banner'])->name('programs.banner');
    });
});

