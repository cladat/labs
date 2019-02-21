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

Route::middleware('auth')->group(function () {
    Route::resource('/roles', 'RoleController');
    Route::resource('/users', 'UserController');
    Route::resource('/profils', 'ProfilController');
});

Route::get('/services', function() {
    return view('pages.services');
})-> name('services');
Route::get('/blog', function() {
    return view('pages.blog');
})-> name('blog');
Route::get('/contact', function() {
    return view('pages.contact');
})-> name('contact');
Route::get('/elements', function() {
    return view('pages.elements');
})-> name('elements');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
