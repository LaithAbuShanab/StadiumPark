<?php

use Illuminate\Support\Facades\Route;

Route::get('language/{lang}', function ($language) {
    session()->put('lang', $language);
    return back();
});

Route::get('/','authController@index')->name('login');
Route::post('login', 'authController@login');
Route::post('register', 'authController@register');


Route::group(['middleware' => 'auth'], function () {

    Route::get('home', 'pageController@home');

    Route::get('news', 'pageController@news');

    Route::get('stadium_details/{id}', 'pageController@stadium_details');
    Route::post('logout', 'authController@logout');
    Route::post('send_appointment', 'appointmentController@save');
    Route::get('cancel_appointment/{id}', 'appointmentController@cancel_appointment');

    Route::get('user/profile', 'pageController@profile');
    Route::post('updateProfile', 'pageController@updateProfile');
    Route::get('myAppointment', 'pageController@myAppointment');
    Route::get('myPost', 'pageController@myPost');
    Route::get('delete_post/{id}', 'pageController@delete_post');

    Route::get('posts', 'pageController@posts');

    Route::post('savePost', 'pageController@savePost');

    Route::get('filter', 'pageController@filter');


});
