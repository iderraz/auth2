<?php

use App\Http\Controllers\AbouController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ContactController;

use App\Models\Abou;
use App\Models\Location;
use App\Models\Portfolio;
use App\Models\Contact;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    $portfolio = Portfolio::all();
    $abou = Abou::all();
    $location = Location::all();
    $contact = Contact::all();
    return view("home", compact("portfolio","abou", "location", "contact"));
});

Route::get('/back', function(){
    return view("back.office");
});

Route::resource('/portfolio', PortfolioController::class);
Route::resource('/abou', AbouController::class);
Route::resource('/location', LocationController::class);
Route::resource('/contact', ContactController::class);