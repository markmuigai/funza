<?php

/*
|--------------------------------------------------------------------------
| Teacher Routes
|--------------------------------------------------------------------------
|
| Register the admin routes for the application.
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Teacher Dashboard
Route::get('/', 'AppController@dashboard')->name('dashboard');

// Classroom
Route::get('/classroom/{classroom}', 'ClassroomController@show')->name('classroom');
