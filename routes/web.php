<?php

use Illuminate\Support\Facades\Route;

// Home Page (still in the main views folder)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Pages inside the 'pages' folder
Route::view('/about', 'pages.about')->name('about');
Route::view('/products', 'pages.products')->name('products');
Route::view('/testimonials', 'pages.testimonials')->name('testimonials');
Route::view('/contact', 'pages.contact')->name('contact');

// Keep your existing dashboard/settings routes below
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';