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
});

Route::get('addition/{augend}/{addend}', function () {
    return view('welcome');
});
Route::get('subtraction', function () {
    return view('welcome');
});
Route::get('multiplication', function () {
    return view('welcome');
});
Route::get('division', function () {
    return view('welcome');
});
Route::get('modulo', function () {
    return view('welcome');
});
Route::get('exponentation', function () {
    return view('welcome');
});
Route::get('nthRoot', function () {
    return view('welcome');
});
