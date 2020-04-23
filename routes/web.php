<?php

use Illuminate\Support\Facades\Route;
use function foo\func;

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
    return view('welcome');
});

//login
Route::get('dashboard', 'Client\Logged\DashboardController@index');
Route::get('appoinment', 'Client\Logged\AppoinmentController@create');
    Route::post('appoinment/fetch', 'Client\Logged\AppoinmentController@fetch')->name('appoinmentcontroller.fetch');
    Route::post('appoinment/store','Client\Logged\AppoinmentController@store');
Route::get('requested', 'Client\Logged\RequestedController@index');
Route::get('profileedit','Client\ClientController@index');
Route::get('service','Client\Logged\ServiceController@index');
Route::post('client/update/{id}','Client\ClientController@update');
//login
//logout
Route::get('home','Client\Logout\HomeController@index');
Route::get('login','Client\Logout\LoginController@index');
Route::post('client/login','Client\Logout\LoginController@login');

Route::get('client/register','Client\ClientController@create');
Route::post('client/store','Client\ClientController@store');
//logout
Route::get('aboutus', 'AboutusController@index');
Route::get('contractus', 'ContractusController@index');
Route::get('healthtips', 'HealthtipsController@index');

//MTP
Route::get('mtphome','Mtp\HomeController@index');
Route::get('clientrequests','Mtp\ClientReqController@index');
Route::get('tests','Mtp\TestController@index');
    Route::get('test/add','Mtp\TestController@create');
    Route::post('test/store','Mtp\TestController@store');
    Route::post('test/destroy/{id}','Mtp\TestController@destroy');
    Route::post('test/edit/{id}','Mtp\TestController@edit');
    Route::post('test/update/{id}','Mtp\TestController@update');
Route::get('hospitals','Mtp\HospitalController@index');
    Route::get('hospital/add','Mtp\HospitalController@create');
    Route::post('hospital/store','Mtp\HospitalController@store');
    Route::post('hospital/destroy/{id}','Mtp\HospitalController@destroy');
    Route::post('hospital/edit/{id}','Mtp\HospitalController@edit');
    Route::post('hospital/update/{id}','Mtp\HospitalController@update');
Route::get('mtp','Mtp\LoginController@index');
Route::get('hospital/test/{id}','Mtp\HospitalTestController@index');
    Route::get('hospitaltest/add','Mtp\HospitalTestController@create');
    Route::post('hospitaltest/store','Mtp\HospitalTestController@store');
    Route::post('hospitaltest/destroy/{id}','Mtp\HospitalTestController@destroy');
    Route::post('hospitaltest/edit/{id}','Mtp\HospitalTestController@edit');
//MTP


