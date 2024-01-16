<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('web.index');
Route::get('/about', [PagesController::class, 'aboutUs'])->name('web.about');
Route::get('/who-we-are', [PagesController::class, 'whoweare'])->name('web.who-we-are');
Route::get('/team', [PagesController::class, 'team'])->name('web.team');
Route::get('/contactus', [PagesController::class, 'contactUs'])->name('web.contactus');
Route::get('/membership', [PagesController::class, 'membership'])->name('web.membership');
Route::get('/join', [PagesController::class, 'join'])->name('web.join');
Route::get('/benefits', [PagesController::class, 'benefits'])->name('web.benefits');
Route::get('/programs', [PagesController::class, 'programs'])->name('web.programs');
Route::get('/evaluation', [PagesController::class, 'evaluation'])->name('web.evaluation');
Route::get('/rules_of_engagement', function(){ return view('web.pages.rules_of_engagement'); })->name('web.rules_of_engagement');
Route::get('/sectors', function(){ return view('web.pages.sectors'); })->name('web.sectors');
Route::get('/construction', function(){ return view('web.pages.construction'); })->name('web.construction');
Route::get('/agriculture', function(){ return view('web.pages.agriculture'); })->name('web.agriculture');
Route::get('/supply_chain', function(){ return view('web.pages.supply_chain'); })->name('web.supply_chain');
Route::get('/technology', function(){ return view('web.pages.technology'); })->name('web.technology');
Route::get('/natural_resources', function(){ return view('web.pages.natural_resources'); })->name('web.natural_resources');
Route::get('/energy', function(){ return view('web.pages.energy'); })->name('web.energy');
Route::get('/textiles', function(){ return view('web.pages.textiles'); })->name('web.textiles');
Route::get('/advocacy', function(){ return view('web.pages.advocacy'); })->name('web.advocacy');
Route::get('/small_businesses', function(){ return view('web.pages.small_businesses'); })->name('web.small_businesses');
Route::get('/women', function(){ return view('web.pages.women'); })->name('web.women');
Route::get('/veterans', function(){ return view('web.pages.veterans'); })->name('web.veterans');
Route::get('/support_services', function(){ return view('web.pages.support_services'); })->name('web.support_services');
Route::get('/international_events', function(){ return view('web.pages.international_events'); })->name('web.international_events');
Route::get('/event_request', function(){ return view('web.pages.event_request'); })->name('web.event_request');
Route::get('/event_calendar', function(){ return view('web.pages.event_calendar'); })->name('web.event_calendar');
Route::get('/events', function(){ return view('web.pages.events'); })->name('web.events');
// Route::get('/blog', function(){ return view('web.pages.blog'); })->name('web.blog');


Route::get('/blog', [PagesController::class, 'blog'])->name('web.blog');


Route::get('/financial', function(){ return view('web.pages.financial'); })->name('web.financial');
Route::get('/grants', function(){ return view('web.pages.grants'); })->name('web.grants');
Route::get('/funding', function(){ return view('web.pages.funding'); })->name('web.funding');
Route::get('/partners_sponsors', function(){ return view('web.pages.partners_sponsors'); })->name('web.partners_sponsors');
Route::get('/become_partner', function(){ return view('web.pages.become_partner'); })->name('web.become_partner');
Route::get('/become_sponsor', function(){ return view('web.pages.become_sponsor'); })->name('web.become_sponsor');
Route::get('/outreach', function(){ return view('web.pages.outreach'); })->name('web.outreach');
Route::get('/chad', function(){ return view('web.pages.chad'); })->name('web.chad');
Route::get('/ghana', function(){ return view('web.pages.ghana'); })->name('web.ghana');
Route::get('/south_africa', function(){ return view('web.pages.south_africa'); })->name('web.south_africa');
Route::get('/zimbabwe', function(){ return view('web.pages.zimbabwe'); })->name('web.zimbabwe');
Route::get('/cameroon', function(){ return view('web.pages.cameroon'); })->name('web.cameroon');
Route::get('/drc', function(){ return view('web.pages.drc'); })->name('web.drc');
Route::get('/cote_divoire', function(){ return view('web.pages.cote_divoire'); })->name('web.cote_divoire');
Route::get('/usa', function(){ return view('web.pages.usa'); })->name('web.usa');
Route::get('/opportunities', function(){ return view('web.pages.opportunities'); })->name('web.opportunities');
Route::get('/opportunities_agriculture', function(){ return view('web.pages.opportunities_agriculture'); })->name('web.opportunities_agriculture');
Route::get('/opportunities_construction', function(){ return view('web.pages.opportunities_construction'); })->name('web.opportunities_construction');
Route::get('/mining', function(){ return view('web.pages.mining'); })->name('web.mining');
Route::get('/rfx', function(){ return view('web.pages.rfx'); })->name('web.rfx');
Route::get('/job_openings', function(){ return view('web.pages.job_openings'); })->name('web.job_openings');
Route::get('/careers', function(){ return view('web.pages.careers'); })->name('web.careers');


// **************************************************** Home Page Frontend Route Starat *****************************************************
// **************************************************** Home Page Frontend Route End *****************************************************


include __DIR__.'/admin.php';

Route::get('/commands', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('optimize');
    \Artisan::call('view:clear');
    \Artisan::call('optimize:clear');
    \Artisan::call('dump-autoload --optimize');
    \Artisan::call('clear-compiled');
    return 'Commands executed successfully!';
});

Route::get('/commandMigrate', function () {
    \Artisan::call('migrate');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('optimize');
    \Artisan::call('view:clear');
    \Artisan::call('optimize:clear');
    return 'Commands executed successfully!';
});
Auth::routes();
