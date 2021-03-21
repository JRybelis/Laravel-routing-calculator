<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;

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

Route::get('addition/{augend}/{addend}', [MathController::class,'addition']);

Route::get('subtraction/{minuend}/{subtrahend}', [MathController::class,'subtraction']);

Route::get('multiplication/{multiplier}/{multiplicand}', [MathController::class,'multiplication']);

Route::get('division/{dividend}/{divisor}', [MathController::class,'division']);

Route::get('modulo/{dividend}/{divisor}', [MathController::class,'modulo']);

Route::get('exponentation/{base}/{exponent}', [MathController::class,'exponentation']);

Route::get('nthRoot/{radicand}/{degree}', [MathController::class,'nthRoot']);
