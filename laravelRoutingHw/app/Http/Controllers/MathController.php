<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller 
{ //gate methods
    public function addition($addition, $augend, $addend) {
        return view('math.operations',['addition' => $addition, 'term1' => $augend, 'term2' => $addend]);
    }
    public function subtraction ($subtraction, $minuend, $subtrahend) {
        return view('math.operations',['subtraction' => $subtraction, 'term1' => $minuend, 'term2' => $subtrahend]);
    }
    public function multiplication ($multiplication, $multiplier, $multiplicand) {
        return view('math.operations',['multiplication' => $multiplication, 'term1' => $multiplier, 'term2' => $multiplicand]);
    }
    public function division ($division, $dividend, $divisor) {
        return view('math.operations',['division' => $division, 'term1' => $dividend, 'term2' => $divisor]);
    }
    public function modulo ($modulo, $dividend, $divisor) {
        return view('math.operations',['modulo' => $modulo, 'term1' => $dividend, 'term2' => $divisor]);
    }
    public function exponentation ($exponentation, $base, $exponent) {
        return view('math.operations',['exponentation' => $exponentation, 'term1' => $base, 'term2' => $exponent]);
    }
    public function nthRoot ($nthRoot, $radicand, $degree) {
        return view('math.operations',['nthRoot' => $nthRoot, 'term1' => $radicand, 'term2' => $degree]);
    }
}
