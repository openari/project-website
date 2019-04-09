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
Route::get('/about-me', function () {return view('about-me'); });
Route::get('/apply-open-ari', function () {return view('apply-open-ari'); });
Route::get('/register-open-ari', function () {return view('register-open-ari'); });
Route::get('/showcase-open-ari', function () {return view('showcase-open-ari'); });
Route::get('/gallery-box', function () {return view('gallery-box'); });
Route::get('/3rd-open-ari', function () {return view('3rd-open-ari'); });
Route::get('/api-open-ari', function () {return view('api-open-ari'); });
Route::get('/ETH-open-ari', function () {return view('ETH-open-ari'); });
Route::get('/faq-accordion', function () {return view('FAQ-accordion'); });
Route::get('/contact', function () {return view('contact'); });

