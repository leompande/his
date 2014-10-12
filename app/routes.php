<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'MainController@index');
Route::get('/login',array('as' => 'login', 'uses' => 'MainController@login'))->before('guest');
Route::post('/login', 'MainController@loginUser');
Route::get('/logout', 'MainController@logout');


Route::get('/system', array('as' => 'system', 'uses' => 'DashboardController@index'))->before('auth');
Route::get('/system/dashboard', 'DashboardController@index')->before('auth');

//category module routes
Route::get('/system/categories', 'CategoryController@index')->before('auth');
Route::get('category/add', 'CategoryController@create');
Route::post('/system/category/store', 'CategoryController@store');
Route::get('categories/list', 'CategoryController@lists');


/// facility module routes
Route::get('/system/facilities', 'FacilityController@index')->before('auth');
Route::get('facility/list', 'FacilityController@lists');
Route::get('facility/add', 'FacilityController@create');
Route::post('/system/facility/store', 'FacilityController@store');

/// room module routes

Route::get('/system/rooms', 'RoomController@index')->before('auth');
Route::get('rooms/list', 'RoomController@lists');
Route::get('rooms/add', 'RoomController@create');
Route::post('/system/rooms/store', 'RoomController@store');


Route::get('/system/employees', 'EmployeeController@index')->before('auth');

// clients module routes
Route::get('/system/clients', 'ClientController@index')->before('auth');
Route::get('clients/list', 'ClientController@lists');
Route::get('clients/add', 'ClientController@create');
Route::post('/system/clients/store', 'ClientController@store');

//payments module routes
Route::get('/system/payments', 'PaymentController@index')->before('auth');
Route::get('/system/reservations', 'ReservationController@index');


Route::get('/system/bookings', 'BookingController@index')->before('auth');
Route::get('bookings/list', 'BookingController@lists');
Route::get('bookings/add', 'BookingController@create');
Route::post('/system/bookings/store', 'BookingController@store');

Route::get('/system/users', 'UserController@index')->before('auth');
