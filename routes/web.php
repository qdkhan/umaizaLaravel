<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Artisan;

Route::controller(FrontController::class)->name('front.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/company', 'company')->name('company');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/services', 'services')->name('services');
    Route::get('/news', 'news')->name('news');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/send-enquiry', 'sendEnquiry')->name('sendEnquiry');
    Route::get('/artisan-command', function() {
        Artisan::call('optimize:clear');
        Artisan::call('storage:link');
        Artisan::call('migrate');
    });
});

Route::controller(BackendController::class)->name('backend.')->group(function () {
    
    Route::get('/login', function(){
        return view('back-end.pages.login');
    });
    Route::get('/dashboard', function(){
        return view('back-end.pages.dashboard');
    });

    //Teams
    Route::get('/team-list', function(){
        return view('back-end.pages.teams');
    });
    Route::match(['GET', 'POST'], '/get-update-team/{id?}', [BackendController::class, 'createTeam']);

    //Projects
    Route::get('/category-list', function(){
        return view('back-end.pages.category');
    });
    Route::match(['GET', 'POST'], '/get-update-category', function(){
        return view('back-end.pages.dashboard');
    });
    Route::get('/project-list', function(){
        return view('back-end.pages.projects');
    });

    //Enquiry List
    Route::get('/enquiry-list', function(){
        return view('back-end.pages.enquiry');
    });

    //User Profile
    Route::match(['GET', 'POST'], '/get-update-profile', function(){
        return view('back-end.pages.profile');
    });
    
});

