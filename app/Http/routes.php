<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'CetakpajaksController@index');
Route::resource('cetakpajaks', 'CetakpajaksController');
Route::get('cetakpajaks/{id}/pph21', 'CetakpajaksController@pph21');
Route::get('cetakpajaks/{id}/pph22', 'CetakpajaksController@pph22');
Route::get('cetakpajaks/{id}/pph23', 'CetakpajaksController@pph23');
Route::get('cetakpajaks/{id}/pph4ayat2', 'CetakpajaksController@pph4ayat2');
Route::get('cetakpajaks/{id}/ppn', 'CetakpajaksController@ppn');


