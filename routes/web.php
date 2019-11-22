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
Route::get('artistimage/{$file}/{$file_id}', function () {
    $artist = new Artistimagecrop();
    return $artist->imageArtistModification($file, $file_id);
});
Route::get('imagejcrop/{$request}', function () {
    $image = new Artistimagecrop();
    return $image->imageCropManually($request);
});
Route::get('posterimage/{$file}/{$file_id}', function () {
    $poster = new Artistimagecrop();
    return $poster->imagePosterModification($file, $file_id);
});
