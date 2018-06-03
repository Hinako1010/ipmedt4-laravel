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
Route::get('/kalender', function () {
    return view('kalender');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/newhome', 'DiaryEntryController@geefhome')->name('newhome');
Route::get('/overzicht', 'DiaryEntryController@geefoverzicht')->name('overzicht');

Route::get('/newentry', 'DiaryEntryController@create');
Route::post('/newentry', 'DiaryEntryController@store');
