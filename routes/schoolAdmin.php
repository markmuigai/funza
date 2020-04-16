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

// Assignment classes and subjects to teachers
Route::get('teachers/{teacher}/classAssignment', 'TeacherController@classAssignment')->name('teachers.class-assignment');

// Fetch classes based on a grade ajax
Route::get('teachers/classAssignment/fetchClasses/{grade}', 'TeacherController@fetchGradeClasses')->name('teachers.class-assignment.fetch-classes');

// Assignment classes and subjects to teachers post
Route::post('teachers/{teacher}/classAssignment', 'TeacherController@storeClassAssignment')->name('teachers.class-assignment.store');

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
