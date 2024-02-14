<?php

use App\Http\Controllers\web\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\DefaultController;
use App\Http\Controllers\Web\FilterController;
use App\Http\Controllers\Web\PagesController;

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
Route::get('/logged', [DefaultController::class, 'logged'])->name('logged.user');
Route::middleware('admin-not-access')->group(function() {
    Route::get('/', [PagesController::class, 'index'])->name('web.index');
    Route::get('/about', [PagesController::class, 'aboutUs'])->name('web.about');
    Route::get('/who-we-are', [PagesController::class, 'whoweare'])->name('web.who-we-are');
    Route::get('/team', [PagesController::class, 'team'])->name('web.team');
    Route::get('/contactus', [PagesController::class, 'contactUs'])->name('web.contactus');
    Route::post('/contactUsData', [PagesController::class, 'contactUsData'])->name('contactus.form');
    Route::post('/joinData', [PagesController::class, 'joinData'])->name('join.form');
    Route::get('/membership', [PagesController::class, 'membership'])->name('web.membership');
    Route::get('/join', [PagesController::class, 'join'])->name('web.join');
    Route::get('/benefits', [PagesController::class, 'benefits'])->name('web.benefits');
    Route::get('/programs', [PagesController::class, 'programs'])->name('web.programs');
    Route::get('/evaluation', [PagesController::class, 'evaluation'])->name('web.evaluation');
    Route::get('/rules_of_engagement', [PagesController::class, 'rules_of_engagement'])->name('web.rules_of_engagement');
    Route::get('/sectors', [PagesController::class, 'sectors'])->name('web.sectors');
    Route::get('/construction', [PagesController::class, 'construction'])->name('web.construction');
    Route::get('/agriculture', [PagesController::class, 'agriculture'])->name('web.agriculture');
    Route::get('/supply_chain', [PagesController::class, 'supply_chain'])->name('web.supply_chain');
    Route::get('/technology', [PagesController::class, 'technology'])->name('web.technology');
    Route::get('/natural_resources', [PagesController::class, 'natural_resources'])->name('web.natural_resources');
    Route::get('/energy', [PagesController::class, 'energy'])->name('web.energy');
    Route::get('/textiles', [PagesController::class, 'textiles'])->name('web.textiles');
    Route::get('/advocacy', [PagesController::class, 'advocacy'])->name('web.advocacy');
    Route::get('/small_businesses', [PagesController::class, 'small_businesses'])->name('web.small_businesses');
    Route::get('/women', [PagesController::class, 'women'])->name('web.women');
    Route::get('/veterans', [PagesController::class, 'veterans'])->name('web.veterans');
    Route::get('/support_services', [PagesController::class, 'support_services'])->name('web.support_services');
    Route::get('/international_events', [PagesController::class, 'international_events'])->name('web.international_events');
    Route::get('/event_request', [PagesController::class, 'event_request'])->name('web.event_request');
    Route::get('/event_calendar', [PagesController::class, 'event_calendar'])->name('web.event_calendar');
    Route::get('/events', [PagesController::class, 'events'])->name('web.events');
    Route::get('/blog', [PagesController::class, 'blog'])->name('web.blog');
    Route::get('/financial', [PagesController::class, 'financial'])->name('web.financial');
    Route::get('/grants', [PagesController::class, 'grants'])->name('web.grants');
    Route::get('/funding', [PagesController::class, 'funding'])->name('web.funding');
    Route::post('/feedback', [FeedbackController::class, 'feedback'])->name('feedbacks');
    Route::get('/partners_sponsors', [PagesController::class, 'partners_sponsors'])->name('web.partners_sponsors');
    Route::get('/become_partner', [PagesController::class, 'become_partner'])->name('web.become_partner');
    Route::get('/become_sponsor', [PagesController::class, 'become_sponsor'])->name('web.become_sponsor');
    Route::get('/outreach', [PagesController::class, 'outreach'])->name('web.outreach');
    Route::get('/chad', [PagesController::class, 'chad'])->name('web.chad');
    Route::get('/ghana', [PagesController::class, 'ghana'])->name('web.ghana');
    Route::get('/south_africa', [PagesController::class, 'south_africa'])->name('web.south_africa');
    Route::get('/zimbabwe', [PagesController::class, 'zimbabwe'])->name('web.zimbabwe');
    Route::get('/cameroon', [PagesController::class, 'cameroon'])->name('web.cameroon');
    Route::get('/drc', [PagesController::class, 'drc'])->name('web.drc');
    Route::get('/cote_divoire', [PagesController::class, 'cote_divoire'])->name('web.cote_divoire');
    Route::get('/usa', [PagesController::class, 'usa'])->name('web.usa');
    Route::get('/opportunities', [PagesController::class, 'opportunities'])->name('web.opportunities');
    Route::get('/opportunities_agriculture', [PagesController::class, 'opportunities_agriculture'])->name('web.opportunities_agriculture');
    Route::get('/opportunities_construction', [PagesController::class, 'opportunities_construction'])->name('web.opportunities_construction');
    Route::get('/mining', [PagesController::class, 'mining'])->name('web.mining');
    Route::get('/rfx', [PagesController::class, 'rfx'])->name('web.rfx');
    Route::get('/job_openings', [PagesController::class, 'job_openings'])->name('web.job_openings');
    Route::get('/job_detail/{id}', [PagesController::class, 'job_detail'])->name('web.job_detail');
    Route::get('/careers', [PagesController::class, 'careers'])->name('web.careers');
    Route::post('/filter-keywords', [FilterController::class, 'filterKeywords'])->name('filter.keywords');
    Route::post('/subscribe-newsletter', [DefaultController::class, 'subscribe'])->name('subscribe.newsletter');
    Route::get('/user-login', [PagesController::class, 'login'])->name('user.login');
    Route::get('/user-register', [PagesController::class, 'register'])->name('user.register');
    Route::post('/user-registration', [PagesController::class, 'registration'])->name('user.registration');
    Route::post('/event_request', [PagesController::class, 'event_request_form'])->name('event.request');
    Route::post('/welcome-modal', [DefaultController::class, 'weclome'])->name('welcom.modal');
    Route::post('/job-application/{id}', [DefaultController::class, 'jobApply'])->name('job.application');
});
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
