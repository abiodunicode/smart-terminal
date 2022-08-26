<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SearchController;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', function () {

    //return view('welcome');
    //Mail::to('info@bhlworld.space')->send(new Welcome());
    // return new Welcome();
});

// Route::get('/printsearch', function () {
//     return view('printsearch');
// });

Route::get('/search', [SearchController::class, 'search'])->name('web.search');
Route::get('/printsearch', [SearchController::class, 'printsearch'])->name('web-1.show');



Auth::routes(['verify' => true]);






Route::get('home', function () {
    return redirect('/dashboard');
});

Route::get('/{vue_capture?}', function () {
    return view('home');
})->where('vue_capture', '[\/\w\.-]*')->middleware('auth');
