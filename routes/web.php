<?php

use Illuminate\Support\Facades\Route;

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
//    return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');


//user role

Route::get('/insert/writer', 'HomeController@insert')->name('insert.writer');
Route::post('/store/writer', 'HomeController@store')->name('store.writer');
Route::get('/all/writer', 'HomeController@allwriter')->name('all.writer');
Route::get('/edit/writer/{id}', 'HomeController@edit')->name('edit.writer');
Route::get('/delete/writer/{id}', 'HomeController@destory')->name('delete.writer');
Route::post('/update/writer/{id}', 'HomeController@update')->name('update.writer');
