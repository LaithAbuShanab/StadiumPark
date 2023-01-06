<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/', 'authController@index');
    Route::post('login', 'authController@login');

    \Illuminate\Support\Facades\Config::set('auth.defines', 'admin');

    Route::group(['middleware' => 'admin:admin'], function () {
        Route::post('logout', 'authController@logout');

        Route::get('home', 'homeController@index');

        /*
         * hours
         */
        Route::get('hour', 'hourController@index');
        Route::get('hour/get/{id?}', 'hourController@get');
        Route::post('hour/save', 'hourController@save');
        Route::get('hour/delete/{id}', 'hourController@delete');

        /*
         * stadiums
         */
        Route::get('stadium', 'stadiumController@index');
        Route::get('stadium/get/{id?}', 'stadiumController@get');
        Route::post('stadium/save', 'stadiumController@save');
        Route::get('stadium/delete/{id}', 'stadiumController@delete');


        /*
         * users
         */
        Route::get('user', 'userController@index');
        Route::get('change_user_status/{id}/{status}', 'userController@change_user_status');

        /*
         * appointment
         */
        Route::get('appointment', 'appointmentController@index');
        Route::get('change_appointment_status/{appointment_id}/{type}', 'appointmentController@change_appointment_status');


        /*
         * Employee
         */
        Route::get('employee', 'employeeController@index');
        Route::get('employee/get/{id?}', 'employeeController@get');
        Route::post('employee/save', 'employeeController@save');
        Route::get('employee/delete/{id}', 'employeeController@delete');


        /*
         * news
         */
        Route::get('news', 'newsController@index');
        Route::get('news/get/{id?}', 'newsController@get');
        Route::post('news/save', 'newsController@save');
        Route::get('news/delete/{id}', 'newsController@delete');






    });

});








