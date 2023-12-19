<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;

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
