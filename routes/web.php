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




Route::get('sales','salescontroller@index');
Route::get('sales/{id}','salescontroller@view');
Route::get('sales/{id}/{projectid}','salescontroller@viewproject');
Route::resource('sales','salescontroller');
Route::resource('dev','devcontroller');
Route::post('sales/update','salescontroller@updateuser');
Route::post('/sales/pru','devcontroller@updatedev');
Route::get('/bug','devcontroller@fakertest');


Route::get('finance','financecontroller@index');
Route::get('admin/cst/{id}','admin@changeuser');
Route::get('admin/pr/{id}','admin@changeproject');
Route::get('admin','admin@index');
Route::post('admin/userupdate','admin@updateuseradmin');
Route::post('admin/updateproject','admin@updateproject');



Route::get('development','devcontroller@index');
Route::get('/', function () {
    return view('welcome');
});




Route::get('/inlogin', function () {
    return view('login');
});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

