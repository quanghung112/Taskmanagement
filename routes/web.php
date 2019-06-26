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
Route::get('/customers','CustomerController@index')->name('customer.index');
Route::get('/customers/add','CustomerController@showFormAdd')->name('customer.showAdd');
Route::post('/customers','CustomerController@add')->name('customer.Add');
Route::get('/customers/{id}/edit','CustomerController@showFormEdit')->name('customer.showEdit');
Route::post('/customers/{id}/edit','CustomerController@edit')->name('customer.Edit');
Route::get('/customers/{id}/delete','CustomerController@delete')->name('customer.delete');



