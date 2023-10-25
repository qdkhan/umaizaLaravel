<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Artisan;

Route::controller(FrontController::class)->name('front.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/company', 'company')->name('company');
    Route::get('/projects/{category_id?}', 'projects')->name('projects');
    Route::get('/projects-single/{id?}', 'projectsSingle')->name('projectsSingle');
    Route::get('/services', 'services')->name('services');
    Route::get('/news', 'news')->name('news');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/send-enquiry', 'sendEnquiry')->name('sendEnquiry');
    Route::get('/artisan-command', function() {
        Artisan::call('optimize:clear');
        // Artisan::call('storage:link');
        // Artisan::call('migrate:fresh');
        // Artisan::call('config:cache');
        // exec('composer dump-autoload');
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
    Route::get('/team-list', 'teamList');
    Route::match(['GET', 'POST'], '/get-update-team/{id?}', 'getUpdateTeam');
    Route::get('/team-delete/{id}', 'teamDelete')->name('team_delete');

    //Category
    Route::get('/category-list', 'categoryList');
    Route::match(['GET', 'POST'], '/get-update-category/{id?}', 'getUpdateCategory');
    Route::get('/category-delete/{id}', 'categoryDelete')->name('category_delete');

    //Project
    Route::get('/project-list', 'projectList');
    Route::match(['GET', 'POST'], '/get-update-project/{id?}', 'getUpdateProject');
    Route::get('/project-delete/{id}', 'projectDelete')->name('project_delete');

    //Enquiry List
    Route::get('/enquiry-list', 'enquiryList');
    Route::get('/enquiry-delete/{id}', 'enquiryDelete')->name('enquiry_delete');

    //User Profile
    Route::match(['GET', 'POST'], '/get-update-profile', function(){
        return view('back-end.pages.profile');
    });
    
});

