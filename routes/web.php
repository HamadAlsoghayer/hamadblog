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



Auth::routes([
    
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/blogs', 'blogsController@store');
Route::get('/blogs/create', 'blogsController@create');
Route::get('/blogs/{blog}/edit', 'blogsController@edit');
Route::get('/blogs/{blog}/show', 'blogsController@show');
Route::patch('/blogs/{blog}', 'blogsController@update');
Route::delete('/blogs/{blog}', 'blogsController@destroy');

