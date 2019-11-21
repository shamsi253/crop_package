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
use Crop\Jcrop\Artistimagecrop;

Route::get('/', function () {
    return view('welcome');
});
Route::get('artistimage', function() {
    $artist = new Artistimagecrop();
    return $artist->imageArtistModification();
});
Route::get('imagejcrop', function() {
    $image = new Artistimagecrop();
    return $image->imageArtistModification();
});
Route::get('posterimage', function() {
    $poster = new Artistimagecrop();
    return $poster->imageArtistModification();
});