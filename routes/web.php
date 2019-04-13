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

Route::get('/', function () {return view('index'); });
Route::get('/about', function () {return view('about.about'); });

Route::get('/artists-apply', 'ArtistController@index');
Route::post('/artists-apply', 'ArtistController@apply');
Route::get('/artists-register', 'ArtistController@create');
Route::post('/artists-register', 'ArtistController@store');


Route::get('/register-step1-open-ari', 'ArtController@create_step1');
Route::post('/register-step1-open-ari', 'ArtController@store_step1');

Route::get('/register-step2-open-ari', 'ArtController@create_step2');
Route::post('/register-step2-open-ari', 'ArtController@store_step2');

Route::get('/register-step3-open-ari', 'ArtController@create_step3');
Route::post('/register-step3-open-ari', 'ArtController@store_step3');

Route::get('/register-step4-open-ari', 'ArtController@create_step4');
Route::post('/register-step4-open-ari', 'ArtController@store_step4');


Route::get('/your-open-ari', function () {return view('your-open-ari'); });
Route::get('/showcase-open-ari', function () {return view('showcase-open-ari'); });
Route::get('/showcase-details', function () {return view('showcase-details'); });
Route::get('/showcase-details-2', function () {return view('showcase-details-2'); });
Route::get('/showcase-details-3', function () {return view('showcase-details-3'); });
Route::get('/showcase-details-4', function () {return view('showcase-details-4'); });
Route::get('/apply-feedback-open-ari', function () {return view('apply-feedback-open-ari'); });
Route::get('/apply-modified-open-ari', function () {return view('apply-modified-open-ari'); });
Route::get('/apply-d-open-ari', function () {return view('apply-d-open-ari'); });
Route::get('/gallery-box', function () {return view('gallery-box'); });
Route::get('/3rd-open-ari', function () {return view('3rd-open-ari'); });
Route::get('/api-open-ari', function () {return view('api-open-ari'); });
Route::get('/ETH-open-ari', function () {return view('ETH-open-ari'); });

Route::get('/faq-accordion', function () {return view('FAQ-accordion'); });

Route::get('/contact', function () {return view('contact'); });

