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
        Route::name('.topic.outcome-result.')->prefix('topic/{substrand}/outcome-result')->group(function () {
            Route::get('/assessment-count/{count}', 'OutcomeResultController@create')->name('create');
            Route::post('/assessment-count/{count}', 'OutcomeResultController@store')->name('store');
        });
    });
});    

// Performance metrics
Route::name('performance.results.')->namespace('Performance')->prefix('/performance/results')->group(function () {
    Route::resource('students', 'StudentController');;
    Route::resource('subjects', 'SubjectController');
    Route::name('students.')->prefix('/students/{student}/')->group(function () {
        Route::resource('strands', 'StrandController');
    });

    // Subject performance by substrand
    Route::name('subjects.strand.')->prefix('/subject/{subject}/strand/{strand}/')->group(function () {
        Route::resource('substrands', 'SubstrandController');
    });
});

// Subject Performance metrics
Route::name('performance.subjects.')->namespace('subject')->prefix('/performance/subjects')->group(function () {
    Route::resource('results', 'ResultController');
});

