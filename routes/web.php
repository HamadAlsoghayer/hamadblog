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

Route::name('blogs_path')->get('/blogs', 'blogsController@index');



Route::get('/cv', function () {
    return response()->file("C:\Users\h.alsoghayer\Documents\Ampps\www\myfirstlaravel\database\cv.pdf");
});



Route::get('/admin', function () {
    return view('admin');
});

Route::get('/create', function () {
    return view('createblog');
});

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

