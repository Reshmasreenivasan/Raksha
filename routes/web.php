<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('login');});
Route::get('signup', function () { return view('signup');});
Route::get('dashboard', function () { return view('dashboard');});
Route::get('home', function () { return view('home');});
Route::get('profile', function () { return view('profile');});
Route::get('timeline', function () { return view('timeline');});
Route::get('topics', function () { return view('topics');});
