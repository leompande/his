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
Route::post('/login',array('as' => 'login', 'uses' => 'MainController@loginUser'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'MainController@destroy'));

Route::get('/logs/{id}', array('as' => 'logs', 'uses' => 'LogsController@lists'));
Route::get('/fullLogs/{id}', array('as' => 'fullLogs', 'uses' => 'LogsController@fullLog'));

Route::get('/system', array('as' => 'system', 'uses' => 'DashboardController@index'))->before('auth');
Route::get('/system/dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@index'))->before('auth');
Route::get('/system/chart', array('as' => 'chart', 'uses' => 'DashboardController@chartQuery'));

//category module routes
Route::get('/system/categories',array('as' => 'categories', 'uses' =>  'CategoryController@index'))->before('auth');
Route::get('categories/list', array('as' => 'listCategories', 'uses' => 'CategoryController@lists'));
Route::get('category/show/{id}', 'CategoryController@show');
Route::get('category/add',array('as' => 'addCategory', 'uses' =>  'CategoryController@create'));
Route::post('/system/category/store', array('as' => 'storeCategory', 'uses' => 'CategoryController@store'));
Route::get('category/edit/{id}', 'CategoryController@edit');
Route::post('/system/category/update', 'CategoryController@update');
Route::get('category/delete/{id}', 'CategoryController@destroy');

/// facility module routes
Route::get('/system/facilities', 'FacilityController@index')->before('auth');
Route::get('facility/list', 'FacilityController@lists');
Route::get('facility/add', 'FacilityController@create');
Route::post('/system/facility/store', 'FacilityController@store');
Route::get('facility/edit/{id}', 'FacilityController@edit');
Route::post('/system/facility/update', 'FacilityController@update');
Route::get('facility/delete/{id}', 'FacilityController@destroy');

/// room module routes

Route::get('/system/rooms', 'RoomController@index')->before('auth');
Route::get('rooms/list', 'RoomController@lists');
Route::get('rooms/add', 'RoomController@create');
Route::post('/system/rooms/store', 'RoomController@store');
Route::get('room/edit/{id}', 'RoomController@edit');
Route::post('/system/room/update', 'RoomController@update');
Route::get('rooms/delete/{id}', 'RoomController@destroy');
Route::get('rooms/roomreserve/{id}', 'RoomController@reserve');
Route::post('/system/rooms/addreserve', 'RoomController@addreserve');


Route::get('/system/employees', 'EmployeeController@index')->before('auth');
Route::get('employees/list', 'EmployeeController@lists');
Route::get('employees/add', 'EmployeeController@create');
Route::get('employee/edit/{id}', 'EmployeeController@edit');
Route::post('/system/employee/update', 'EmployeeController@update');
Route::get('employee/delete/{id}', 'EmployeeController@destroy');
Route::post('/system/employees/store', 'EmployeeController@store');

// clients module routes
Route::get('/system/clients', 'ClientController@index')->before('auth');
Route::get('clients/list', 'ClientController@lists');
Route::get('clients/add', 'ClientController@create');
Route::get('client/edit/{id}', 'ClientController@edit');
Route::post('/system/client/update', 'ClientController@update');
Route::get('client/delete/{id}', 'ClientController@destroy');
Route::post('/system/clients/store', 'ClientController@store');

//payments module routes
Route::get('/system/payments', 'PaymentController@index')->before('auth');
Route::get('/system/reservations', 'ReservationController@index');


Route::get('/system/bookings', 'BookingController@index')->before('auth');
Route::get('bookings/replace', 'BookingController@replace');
Route::get('bookings/list', 'BookingController@lists');
Route::get('bookings/show/{id}', 'BookingController@show');
Route::get('bookings/add', 'BookingController@create');
Route::post('/system/bookings/store', 'BookingController@store');
Route::get('booking/edit/{id}', 'BookingController@edit');
Route::get('/system/booking/update', 'BookingController@update');
Route::get('bookings/delete/{id}', 'BookingController@destroy');
Route::get('bookings/reserve/{id}', 'BookingController@reserve');
Route::post('/system/bookings/addreserve', 'BookingController@addreserve');

Route::get('/system/users', 'UserController@index')->before('auth');
Route::get('user/list', 'UserController@lists');
Route::get('user/add', 'UserController@create');
Route::get('user/edit/{id}', 'UserController@edit');
Route::post('/system/user/update', 'UserController@update');
Route::get('user/delete/{id}', 'UserController@destroy');
Route::post('/system/user/store', 'UserController@store');


Route::get('/system/report', 'ReportController@index')->before('auth');
Route::get('/system/report/roomview', 'ReportController@roomview');
Route::get('/system/report/generalview', 'ReportController@generalview');
Route::get('/system/report/reservationview', 'ReportController@reservationview');



Route::get('/system/services', 'ServiceController@index');
Route::get('services/list', 'ServiceController@lists');
Route::get('services/add', 'ServiceController@create');
Route::post('/system/services/store', 'ServiceController@store');
Route::get('services/edit/{id}', 'ServiceController@edit');
Route::post('services/update/{id}', 'ServiceController@update');
Route::get('services/delete/{id}', 'ServiceController@delete');