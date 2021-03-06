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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// ログイン　登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('index', function () {return view('events.index');})->name('index.get');
Route::get('aboutus',  function () {return view('aboutus');})->name('aboutus.get');

// カテゴリー
Route::get('sport_index', 'EventController@sports')->name('sport.get');
Route::get('art_index', 'EventController@arts')->name('art.get');
Route::get('beauty_index', 'EventController@beauty')->name('beauty.get');
Route::get('technology_index', 'EventController@technology')->name('technology.get');
Route::get('food_index', 'EventController@food')->name('food.get');
Route::get('language_index', 'EventController@language')->name('language.get');
Route::get('nature_index', 'EventController@nature')->name('nature.get');
Route::get('others_index', 'EventController@others')->name('others.get');

// イベント詳細
Route::get('eventshow/{id}', 'EventController@eventshow')->name('eventshow.get');

Route::get('post',  'EventController@create')->name('post.get');
Route::post('items',  'EventController@store')->name('post.post');
