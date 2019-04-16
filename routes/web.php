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

Route::get('/', 'HomeController@index');
Route::get('/about', function () {return view('about.about'); });

Route::get('/artists-apply', 'ArtistController@index');
Route::post('/artists-apply', 'ArtistController@apply');
Route::get('/artists-register', 'ArtistController@create');
Route::post('/artists-register', 'ArtistController@store');


Route::get('/query', 'ArtController@query');
Route::get('/browse', 'ArtController@index');
Route::get('/arts/{artId}', 'ArtController@show');
Route::get('/arts/{artId}/{part?}', 'ArtController@show');
Route::get('/arts/{artId}/pointers/create', 'PointerController@create');
Route::post('/arts/{artId}/pointers/create', 'PointerController@store');

Route::get('/register-step1-open-ari', 'ArtController@create_step1');
Route::post('/register-step1-open-ari', 'ArtController@store_step1');

Route::get('/register-step2-open-ari', 'ArtController@create_step2');
Route::post('/register-step2-open-ari', 'ArtController@store_step2');

Route::get('/register-step3-open-ari', 'ArtController@create_step3');
Route::post('/register-step3-open-ari', 'ArtController@store_step3');

Route::get('/register-step4-open-ari', 'ArtController@create_step4');
Route::post('/register-step4-open-ari', 'ArtController@store_step4');

Route::get('/applications/register', 'ApplicationController@create');
Route::post('/applications/register', 'ApplicationController@store');

Route::get('/your-open-ari', function () {return view('your-open-ari'); });
Route::get('/apply-feedback-open-ari', function () {return view('apply-feedback-open-ari'); });
Route::get('/apply-modified-open-ari', function () {return view('apply-modified-open-ari'); });
Route::get('/3rd-party-applications', function () {return view('gallery-box'); });
Route::get('/resources', function () {return view('3rd-open-ari'); });

Route::get('/api-open-ari', function () {return view('api-open-ari'); });
Route::get('/ETH-open-ari', function () {return view('ETH-open-ari'); });

Route::get('/faq', function () {return view('FAQ-accordion'); });

Route::get('/contact', function () {return view('contact'); });

