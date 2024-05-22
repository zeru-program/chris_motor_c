<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\LandingController;

/*
Route::get('/', function () {
    return view('landing-page.home');
});
*/

Route::fallback(function () { return view('error.404'); });

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'indexHome')->name('home');
    Route::get('/home', function () {
        return redirect()->route('home');
    });
    
    Route::get('/blog', "indexBlog")->name("blog");
    
    Route::get('/about-us', 'indexAbout')->name('about');
    
    Route::get('/contact-us', 'indexContact')->name('contact');
});