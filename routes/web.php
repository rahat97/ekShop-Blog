<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsfeedController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\TopStoriesController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\WhoWeAreController;
use App\Http\Controllers\WhatWeDoController;



Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
//route for Newsfeed.. 

Route::get('/Newsfeed/create', [NewsfeedController::class, 'create'])->name('NewsfeedCreate');
Route::post('/Newsfeed/save', [NewsfeedController::class, 'save'])->name('Newsfeed.save');
Route::get('/Newsfeed/edit/{id}', [NewsfeedController::class, 'edit'])->name('Newsfeed.edit');
Route::post('/Newsfeed/update/{id}', [NewsfeedController::class, 'update'])->name('Newsfeed.update');
Route::delete('/Newsfeed/delete/{id}', [NewsfeedController::class, 'destroy'])->name('Newsfeed.delete');
Route::get('/Newsfeed/list', [NewsfeedController::class, 'list'])->name('NewsfeedList');

//Route for  Trending.. 

Route::get('/Trending/create', [TrendingController::class, 'create'])->name('trending.create');
Route::post('/Trending/save', [TrendingController::class, 'save'])->name('trending.save');
Route::get('/Trending/edit/{id}', [TrendingController::class, 'edit'])->name('trending.edit');
Route::post('/Trending/update/{id}', [TrendingController::class, 'update'])->name('trending.update');
Route::delete('/Trending/delete/{id}', [TrendingController::class, 'destroy'])->name('trending.delete');
Route::get('/Trending/list', [TrendingController::class, 'list'])->name('trending.list');

// Route for TopStories

Route::get('/TopStories/create', [TopStoriesController::class, 'create'])->name('TopStories.create');
Route::post('/TopStories/save', [TopStoriesController::class, 'save'])->name('TopStories.save');
Route::get('/TopStories/edit/{id}', [TopStoriesController::class, 'edit'])->name('TopStories.edit');
Route::post('/TopStories/update/{id}', [TopStoriesController::class, 'update'])->name('TopStories.update');
Route::delete('/TopStories/delete/{id}', [TopStoriesController::class, 'delete'])->name('TopStories.delete');
Route::get('/TopStories/list', [TopStoriesController::class, 'list'])->name('TopStories.list');

//Email Route
 Route::get('/Subscribed_email', [EmailController::class, 'index'])->name('SubscribeEmail');
 Route::post('/Subscribed_email', [EmailController::class, 'store'])->name('EmailSubscription');
 Route::get('/Subscribed_email', [EmailController::class, 'show'])->name('SubscribeEmailShow');
 Route::delete('/Subscribed_email/delete/{id}', [EmailController::class, 'destroy'])->name('SubscribeEmailDelete');
 Route::get('/Subscribed_email/sendEmail/{id}', [EmailController::class, 'Email'])->name('sendEmail');


 //who we are Route

 Route::get('/Who_We_Are', [WhoWeAreController::class, 'index'])->name('Who_We_Are');

//what we do Route

Route::get('/What_We_Do', [WhatWeDoController::class, 'index'])->name('What_We_Do');



