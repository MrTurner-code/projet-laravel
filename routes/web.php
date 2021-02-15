<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\EventController;
use App\Models\City;
use App\Models\Interest;
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

Route::resource('/', AppController::class);
Route::resource('/event', EventController::class);
Route::middleware('auth')->group(
    function () {
        Route::view('/home', 'home')->name('home');
        route::get('/dashboard', function () {
            $interests = Interest::all();
            $cities = City::all();
            return view('dashboard', compact('interests', 'cities'));
        })->name('dashboard');
        Route::get('/dashboard/edit', function () {
            $interests = Interest::all();
            $cities = City::all();
            return view('user.edit', compact('interests', 'cities'));
        })->name('user.edit');
    }
);
