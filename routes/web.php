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

Auth::routes();
Route::get('/', 'HomeController@index');


Route::get('/pdftest', function () {
    return view('form');
});




Route::get('/home', 'DiaryEntryController@index')->name('calendar');

// nieuwe dagboek entry
Route::get('/newentry', 'DiaryEntryController@create');
Route::post('/newentry', 'DiaryEntryController@store');

Route::post('submitForm','UserDetailController@store');
Route::get('/pdf','UserDetailController@index');

//download pdf
Route::get('/downloadPDF/{id}','UserDetailController@downloadPDF');
