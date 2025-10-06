<?php

use Illuminate\Support\Facades\Route;

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

//Route thang qua view
Route::get('/', function () {return view('pages/home');});
Route::get('/home', function () {return view('pages/home');});
Route::get('/bicycles', function () {return view('pages/bicycles');});
// Route::get('/', function () {return view('pages/home');});
// Route::get('/', function () {return view('pages/home');});
// Route::get('/', function () {return view('pages/home');});
