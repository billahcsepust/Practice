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
    return view('welcome');
});
Route::get('/employer', 'EmployerController@index');
Route::get('/country','CountryController@index');
Route::get('/country/create','CountryController@create');
Route::post('/country/store','CountryController@store');
Route::get('/country/edit/{id}','CountryController@edit');
Route::put('/country/update/{id}',['uses'=>'CountryController@update','as'=>'country-update']);
Route::delete('/country/delete/{id}',['uses'=>'CountryController@destroy','as'=>'country-delete']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
