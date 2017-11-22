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
Route::get('/about', function () {
    return view('about');
});
Route::get('/search', function () {
    return view('search');
});

Route::post('upload', 'UploadController@upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/food/new', 'HomeController@addmenu')->name('add menu');

Route::get('/food/{id}', function ($fid) {
    $foods = DB::table('food')->where('fid',$fid)->select('views')->first();
    DB::table('food')
        ->where('fid', $fid)
        ->update(['views' => ($foods->views)+1]);
    return view('food.food')->with('fid', $fid);
})->name('food');
