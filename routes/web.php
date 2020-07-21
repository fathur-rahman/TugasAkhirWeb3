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
    return view('welcome');
});

Auth::routes();

Route::GET('/home', 'ProfileController@create');

Route::get('profile/edit', 'ProfileController@edit');
Route::get('/profile/update', 'ProfileController@update');
Route::get('/profile/create', 'ProfileController@create');
Route::GET('/profile', 'ProfileController@store');
Route::get('/profile/{id}', 'ProfileController@index');

Route::get('/', 'PostingController@index');
Route::get('/posting/create', 'PostingController@create');
Route::get('/posting/{id}', 'PostingController@show');
Route::get('/posting/{id}/edit', 'PostingController@edit');
Route::get('/posting/{id}/update', 'PostingController@update');
Route::get('/posting/{id}/delete', 'PostingController@delete');
Route::get('/posting', 'PostingController@store');
Route::get('/cat/{id}', 'PostingController@cat');
Route::get('/comment/{id}', 'PostingController@comment');

