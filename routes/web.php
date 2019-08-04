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
    return view('site.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function () {
    return view('site.index');
});

Route::get('/about', function () {
    return view('site.about');
});
Route::get('/services', function () {
    return view('site.services');
});
Route::get('/people', function () {
    return view('site.people');
});
Route::get('/consult', function () {
    return view('site.consult');
});
Route::get('/resources', function () {
    return view('site.resources');
});
Route::get('/contact', function () {
    return view('site.contact');
});





