<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\WhoweareController;
use App\Http\Controllers\web\TeamController;
use App\Http\Controllers\web\ContactusController;
use App\Http\Controllers\web\MembershipController;

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

Route::get('/', [HomeController::class, 'index'])->name('web.index');
Route::get('/about', [AboutController::class, 'index'])->name('web.about');
Route::get('/who-we-are', [WhoweareController::class, 'index'])->name('web.who-we-are');
Route::get('/who-we-are', [WhoweareController::class, 'index'])->name('web.who-we-are');
Route::get('/team', [TeamController::class, 'index'])->name('web.team');
Route::get('/contactus', [ContactusController::class, 'index'])->name('web.contactus');
Route::get('/membership', [MembershipController::class, 'index'])->name('web.membership');

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
