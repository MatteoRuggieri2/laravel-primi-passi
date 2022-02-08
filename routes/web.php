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

// HOME
Route::get('/', function () {

    $data = [
        'homeTitle' => 'Ciao sono la homepage',
        'restaurants' => [
            'La montagna in un piatto',
            'In riva ammare',
            'Mangia che ti passa'
        ],
    ];

    return view('home', $data);
})->name('home');


// CHI SIAMO
Route::get('/about-us', function () {

    return view('about');
})->name('about');


// I NOSTRI RISTORANTI
Route::get('/our-restaurants', function () {

    return view('restaurants');
})->name('restaurants');


// SOCIALS
Route::get('/socials', function () {

    return view('socials');
})->name('socials');
