<?php

/*
|--------------------------------------------------------------------------
| School Admin Routes
|--------------------------------------------------------------------------
|
| Register the School admin routes for the application.
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// School Admin Dashboard
Route::get('/', 'AppController@dashboard')->name('dashboard');

// Teachers
Route::resource('teachers', 'TeacherController');

// Students
Route::resource('students', 'StudentController');

// Teachers export csv
Route::get('csv/teachers/export', 'TeacherController@export')->name('teachers.export');

// Export csv template
Route::get('csv/teachers/csv-template', 'TeacherController@exportCSVTemplate')->name('teachers.export.csv-template');

// Import teachers csv
Route::get('csv/teachers/import', 'TeacherController@import')->name('teachers.import');

// Grades
Route::resource('grades', 'GradeController');