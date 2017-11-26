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

//Homepage
Route::get('/', 'PageController@index')->name('pages.index');
//Call For Paper
Route::get('/asset-call-for-paper', 'PageController@paper')->name('pages.paper');
//Organising Committee
Route::get('/events-asset-organising-committee', 'PageController@committee')->name('events.committee');
//About Asset 18
Route::get('/know-more-about-conference-asset', 'PageController@knowAsset')->name('abouts.asset');
//About
Route::get('/events-about-conference-venue', 'PageController@knowAbout')->name('abouts.about');
//Basic Auth
Auth::routes();
//Auth Home
Route::get('/home', 'HomeController@index')->name('home');
