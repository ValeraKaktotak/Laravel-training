<?php

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
Route::get('/', function () {
    return view('home');
})->name('home-page');

Route::get('/about', function () {
    return view('about');
})->name('about-us-page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact-page');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');





