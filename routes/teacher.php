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

// Subjects
Route::name('classroom.')->prefix('/classroom/{classroom}')->group(function () {
    Route::name('subject')->prefix('subject/{subject}')->group(function () {
        Route::get('/', 'SubjectController@show');
    });
});    

// Classroom subject dashboard page
Route::get('track-progress/{classroomSubject}', 'ProgressController@index');
