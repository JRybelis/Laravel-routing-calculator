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

Route::get('calculate/{operation}/{term1}/{term2}', [MathController::class,'mathOperation']);

Route::get('calculate', [PostCalculatorController::class,'show'])->name('showCalculator');

Route::post('calculate', [PostCalculatorController::class,'calculate'])->name('doMath');
