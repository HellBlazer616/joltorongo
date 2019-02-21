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

// Route::get('/', function () {
//     return view('master');
// });

Route::get('/','SongsController@index');
Route::get('/home','SongsController@index');

Route::get('/music_news', function () {
    return view('music_news');
});

Route::get('/album', function () {
    return view('album');
});

Route::get('/browse', function () {
    return view('browse');
});

Route::get('/playlist', function () {
    return view('playlist');
});
Route::get('/search', function () {
    return view('search');
});

Route::get('/single_artist', function () {
    return view('single_artist');
});
Route::get('/single_album_songlist', function () {
    return view('single_album_songlist');
});
Route::get('/single_playlist', function () {
    return view('single_playlist');
});

Route::resource('songs','SongsController');
Route::resource('genre', 'GenresController');
Route::resource('artist','ArtistsController');
Route::resource('album','AlbumsController');

Route::get('/artist_dynamic', function() {
    return View::make('playlist');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// google login with socialite
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
