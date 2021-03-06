<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('load/{id}', 'MailController@readmail');
Route::post('contact', 'MailController@sendmail');
Route::get('robots.txt', 'ApiController@robotGenerator');
Route::get('sitemap', 'ApiController@sitemapGenerator');
Route::get('sitemap.xml', 'ApiController@sitemapGenerator');
