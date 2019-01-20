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

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');

Route::get('/actors', 'ActorController@index');
Route::get('/clients', 'ClientController@index');
Route::get('/movies', 'MovieController@index');
Route::get('/lendings', 'LendingController@index');
Route::get('/genres', 'GenreController@index');

Route::get('/actors/new', 'ActorController@create');
Route::post('/actors', 'ActorController@store');

Route::get('/clients/new', 'ClientController@create');
Route::post('/clients', 'ClientController@store');

Route::get('/movies/new', 'MovieController@create');
Route::post('/movies', 'MovieController@store');

Route::get('/lendings/new', 'LendingController@create');
Route::post('/lendings', 'LendingController@store');

Route::get('/genres/new', 'GenreController@create');
Route::post('/genres', 'GenreController@store');

Route::get('/actors/delete/{id}', 'ActorController@destroy');
Route::get('/clients/delete/{id}', 'ClientController@destroy');
Route::get('/movies/delete/{id}', 'MovieController@destroy');
Route::get('/lendings/delete/{id}', 'LendingController@destroy');
Route::get('/genres/delete/{id}', 'GenreController@destroy');