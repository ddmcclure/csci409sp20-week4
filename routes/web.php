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

Route::get('/', function () {
    return '/route';
});

Route::get('/hotels', 'HotelController@index');

Route:resource('reservations', 'ReservationsController');
Route::get('/reservations', 'ReservationController@index');
Route::get('/reservations/create/{id}', 'ReservationController@create');
