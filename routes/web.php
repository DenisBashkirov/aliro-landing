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

Route::get('/', ['uses'=>'PagesController@home', 'as'=>'home']);
Route::post('/thanks/order', ['uses'=>'PagesController@thanks', 'as'=>'thanks.order']);