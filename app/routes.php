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


Route::get('/system', 'DashboardController@index');
Route::get('/system/dashboard', 'DashboardController@index');

//category module routes
Route::get('/system/categories', 'CategoryController@index');
Route::get('category/add', 'CategoryController@create');
Route::post('/system/category/store', 'CategoryController@store');
Route::get('categories/list', 'CategoryController@lists');


/// facility module routes
Route::get('/system/facilities', 'FacilityController@index');
Route::get('facility/list', 'FacilityController@lists');
Route::get('facility/add', 'FacilityController@create');
Route::post('/system/facility/store', 'FacilityController@store');

/// room module routes

Route::get('/system/rooms', 'RoomController@index');
Route::get('rooms/list', 'RoomController@lists');
Route::get('rooms/add', 'RoomController@create');
Route::post('/system/rooms/store', 'RoomController@store');


Route::get('/system/employees', 'EmployeeController@index');
Route::get('/system/clients', 'ClientController@index');

//payments module routes
Route::get('/system/payments', 'PaymentController@index');
Route::get('/system/reservations', 'ReservationController@index');
Route::get('/system/bookings', 'BookingController@index');
Route::get('/system/users', 'UserController@index');
