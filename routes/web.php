<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/feed/{rss_id}', [NewsController::class, 'aggregrate']);

// Route::get('/awal', [App\Http\Controllers\RssController::class, 'awal']);
Route::get('/France 24', [App\Http\Controllers\RssController::class, 'france']);
Route::get('/Zeit Online', [App\Http\Controllers\RssController::class, 'germany']);
Route::get('/Stuff.co.nz', [App\Http\Controllers\RssController::class, 'newzeland']);
Route::get('/Korea Times', [App\Http\Controllers\RssController::class, 'korea']);


