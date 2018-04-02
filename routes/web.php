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

Route::group(['middleware' => ['web']], function () {
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

  Route::get('/users/create',[
    'uses' => 'UsersController@create',
    'as' => 'user.create'
  ]);

  Route::post('/users/store', [
    'uses' => 'UsersController@store',
    'as' => 'user.store'
  ]);

  Route::get('/users/admin/{id}', [
    'uses' => 'UsersController@admin',
    'as' => 'user.admin'
  ]);

  Route::get('/users/not-admin/{id}', [
    'uses' => 'UsersController@not_admin',
    'as' => 'user.not.admin'
  ]);

  Route::get('/users/profile', [
    'uses' => 'ProfilesController@index',
     'as' => 'users.profile'
   ]);
  Route::get('/users/profile/update', [
    'uses' => 'ProfilesController@update',
    'as' => 'users.profile.update'
  ]);
});
