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
Route::get('sales/sales/{id}/{projectid}','salescontroller@viewproject');
Route::resource('sales','salescontroller');
Route::resource('dev','devcontroller');



Route::get('/', function () {
    return view('welcome');
});
Route::get('/f', function () {
    return view('finance');
});
Route::get('/development', function () {
    return view('development');
});
Route::get('/admin', function () {
    return view('admin');


});
Route::get('/inlogin', function () {
    return view('login');
});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

