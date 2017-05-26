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
/*
Route::get('/',function ()
{
  return view ('home');
});*/

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/services', 'PagesController@services');
Route::get('/team', 'PagesController@team');
Route::get('/social', 'PagesController@social');
Route::get('/dna', 'PagesController@dna');
