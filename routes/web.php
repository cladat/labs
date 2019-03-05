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

Route::middleware('auth')->group(function () {
    Route::resource('/roles', 'RoleController');
    Route::resource('/users', 'UserController');
    Route::resource('/profils', 'ProfilController');
    Route::resource('/service', 'ServiceController');
    Route::resource('/carousel', 'CarouselController');
    Route::resource('/content', 'ContentController');
    Route::resource('/client', 'ClientController');
    Route::resource('/project', 'ProjectController');
    Route::resource('/article', 'ArticleController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/tag', 'TagController');
    Route::resource('/comment', 'CommentController');
    Route::resource('/commentval', 'CommentvalController');
    Route::resource('/validation', 'ValidationController');
    Route::resource('/newsletter', 'NewsletterController');
    Route::resource('/contact', 'ContactController');
});

Route::get('/users/{user}/block', 'UserController@block')->name('users.block');
Route::get('/users/{user}/deblock', 'UserController@deblock')->name('users.deblock');


Route::get('/', 'HomepageController@index')->name('/');

Route::get('/services', 'ServicepageController@index')->name('services');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{category}/showcat', 'BlogController@showcat')->name('blog.showcat');
Route::get('/blog/{tag}/show', 'BlogController@show')->name('blog.show');
Route::get('/blog/{article}/read', 'BlogController@read')->name('blog.read');

Route::post('/blog/search', 'BlogController@search')->name('search');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/elements', function() {
    return view('pages.elements');
})-> name('elements');
Auth::routes();