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

Route::get('/', 'DefaultController@index')->name('default');

Route::get('/addcontent', 'HomeController@getAddContent')->name('addcontent');

Route::get('/about','AboutController@index')->name('about');

Route::get('/contact','ContactController@index')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::post('/postcontent', 'HomeController@postContent')->name('post-content');

Route::post('/postmessage', 'ContactController@postMessage')->name('postmessage');

Route::get('/portfoliouploadform', 'PortfolioController@portfolioUploadForm')->name('portfoliouploadform');

Route::post('upload', 'PortfolioController@postManagePortfolio')->name('upload');