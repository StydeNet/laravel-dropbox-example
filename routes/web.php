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


Route::get('/', 'FileController@index')->name('files.index');

Route::post('/files', 'FileController@store')->name('files.store');

Route::delete('/files/{file}', 'FileController@destroy')->name('files.destroy');

Route::get('/files/{file}/download', 'FileController@download')->name('files.download');
