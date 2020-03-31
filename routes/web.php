<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Auth scaffolding
Auth::routes();

// 
Route::get('/home', 'HomeController@index')->name('home');

// Register school
Route::get('/register-school', 'Guest\SchoolController@create')->name('school.create');

// Store school details
Route::post('/register-school', 'Guest\SchoolController@storeSchoolDetails')->name('school.store');

// Show school admin form
Route::get('/register-school/register-admin', 'Guest\SchoolController@createAdmin')->name('school.admin.create');

// Store school admin
Route::post('/register-school/register-admin', 'Guest\SchoolController@storeSchoolAdminDetails')->name('school.admin.store');

// Show confirm form
Route::get('/register-school/confirm', 'Guest\SchoolController@confirmSchoolRegistrationForm')->name('school.confirm-registration.create');

// Confirm Registration
Route::post('/register-school/confirm', 'Guest\SchoolController@confirmSchoolRegistration')->name('school.confirm-registration.store');