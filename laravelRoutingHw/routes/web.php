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
    return view('When you add {augend} and {addend}, you receive ');
});
Route::get('subtraction/{minuend}/{subtrahend}', function () {
    return view('When you subtract {subtrahend} from {minuend}, you receive ');
});
Route::get('multiplication/{multiplier}/{multiplicand}', function () {
    return view('When you multiply {multiplier} by {multiplicand}, you receive ');
});
Route::get('division/{dividend}/{divisor}', function () {
    return view('When you divide {dividend} by {divisor}, you receive ');
});
Route::get('modulo/{dividend}/{divisor}', function () {
    return view('When you divide {dividend} by {divisor}, the remainder you receive is ');
});
Route::get('exponentation/{base}/{exponent}', function () {
    return view('When you raise {base} to the power of {exponent}, you receive ');
});
Route::get('nthRoot/{radicand}/{degree}', function () {
    return view('When you pull a {degree}th degree root out of {radicand}, you receive ');
});
