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
    Route::get('/student/{student}', 'StudentController@show')->name('student.show');
    Route::name('subject')->prefix('subject/{subject}')->group(function () {
        Route::get('/', 'SubjectController@show');
        Route::name('.topic.outcome-result.')->prefix('topic/{topic}/outcome-result')->group(function () {
            Route::get('/', 'OutcomeResultController@create')->name('create');
            Route::post('/', 'OutcomeResultController@store')->name('store');
        });
    });
});    

