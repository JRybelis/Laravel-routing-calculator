<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;
use App\Http\Controllers\PostCalculatorController;

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

Route::get('calculate/{addition}/{augend}/{addend}', [MathController::class,'addition']);

Route::get('calculate/{subtraction}/{minuend}/{subtrahend}', [MathController::class,'subtraction']);

Route::get('calculate/{multiplication}/{multiplier}/{multiplicand}', [MathController::class,'multiplication']);

Route::get('calculate/{division}/{dividend}/{divisor}', [MathController::class,'division']);

Route::get('calculate/{modulo}/{dividend}/{divisor}', [MathController::class,'modulo']);

Route::get('calculate/{exponentation}/{base}/{exponent}', [MathController::class,'exponentation']);

Route::get('calculate/{nthRoot}/{radicand}/{degree}', [MathController::class,'nthRoot']);


Route::get('calculate', [PostCalculatorController::class,'show'])->name('showCalculator');

Route::post('calculate', [PostCalculatorController::class,'calculate'])->name('doMath');
