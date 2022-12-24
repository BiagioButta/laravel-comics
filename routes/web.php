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
    $comics = config('comicsdb.comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');


//////////////////////////////////////
Route::get('/singlepage0', function () {
    $comics = config('comicsdb.comics.0');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage1', function () {
    $comics = config('comicsdb.comics.1');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage2', function () {
    $comics = config('comicsdb.comics.2');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage3', function () {
    $comics = config('comicsdb.comics.3');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage4', function () {
    $comics = config('comicsdb.comics.4');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage5', function () {
    $comics = config('comicsdb.comics.5');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage6', function () {
    $comics = config('comicsdb.comics.6');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage7', function () {
    $comics = config('comicsdb.comics.7');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage8', function () {
    $comics = config('comicsdb.comics.8');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage9', function () {
    $comics = config('comicsdb.comics.9');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage10', function () {
    $comics = config('comicsdb.comics.10');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage11', function () {
    $comics = config('comicsdb.comics.11');
    return view('singlepage', compact('comics'));
})->name('singlepage');

Route::get('/singlepage12', function () {
    $comics = config('comicsdb.comics.12');
    return view('singlepage', compact('comics'));
})->name('singlepage');

