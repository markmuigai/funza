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