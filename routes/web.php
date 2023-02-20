<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::controller(FrontController::class)->name('front.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/company', 'company')->name('company');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/services', 'services')->name('services');
    Route::get('/news', 'news')->name('news');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/send-enquiry', 'sendEnquiry')->name('sendEnquiry');
});