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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/chisiamo', function () {
    return view('chisiamo');
})->name('chisiamo');
Route::get('/dovesiamo', function () {
    return view('dovesiamo');
})->name('dovesiamo');
Route::get('/franchising', function () {
    return view('franchising');
})->name('franchising');
Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');
Route::get('/shoponline', function () {
    return view('shoponline');
})->name('shoponline');

