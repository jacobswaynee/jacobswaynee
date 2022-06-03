<?php

use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\MainController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Route;

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

Route::get(/**
 * @return Application|RedirectResponse|Redirector
 */ '/', function () {
    return redirect(route('home'));
});


Route::get('/coming-soon',[ComingSoonController::class, 'index']);
Route::post('/coming-soon/rsvp',[ComingSoonController::class, 'rsvp'])->name('rsvp');
Route::post('/coming-soon/message',[ComingSoonController::class, 'message'])->name('message');


Route::controller(MainController::class)->group(function(){

    Route::get('/', 'index')->name('home');

});



