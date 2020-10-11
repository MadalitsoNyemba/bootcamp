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


Route::get('/', 'App\Http\Controllers\TodoController@index')->name('index');
Route::post('/', 'App\Http\Controllers\TodoController@addItem')->name('addItem');

Route::get('/edit/{item_id}', 'App\Http\Controllers\TodoController@showEdit')->name('showEdit');

Route::post('/edit/item', 'App\Http\Controllers\TodoController@editItem')->name('editItem');


Route::get('/delete/{item_id}', 'App\Http\Controllers\TodoController@deleteItem')->name('deleteItem');
