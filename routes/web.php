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

Route::post('/forum', 'ForumsController@index')->name('forum');

Route::get('{provider}/auth', 'SocialsController@auth')->name('social.auth');

Route::get('{provider}/redirect', 'SocialsController@auth_callback')->name('social.callback');

Route::get('/discuss', function(){
    return view('discus');
});

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('channels', 'ChannelsController');

    Route::get('discussions/create', 'DiscussionsController@create')->name('discussions.create');
    
    Route::post('discussions/store', 'DiscussionsController@store')->name('discussions.store');
    
    Route::get('discussion/{slug}', 'DiscussionsController@show')->name('discussion');
});

