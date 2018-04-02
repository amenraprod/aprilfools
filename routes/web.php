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

Route::get('/test', function() {
  return App\User::find(1)->profile;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', [
  'uses' => 'UsersController@index',
  'as' => 'users'
]);

Route::post('/user/store', [
  'uses' => 'UsersController@store',
  'as' => 'user.store'
]);
