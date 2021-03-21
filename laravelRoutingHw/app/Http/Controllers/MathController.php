<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller //gate method
{
    public function addition($addition, $augend, $addend) {
        return $augend + $addend;
        
    }
    public function subtraction ($subtraction, $minuend, $subtrahend) {
        return $minuend - $subtrahend;
        
    }
    public function multiplication ($multiplication, $multiplier, $multiplicand) {
        return $multiplier * $multiplicand;
        
    }
    public function division ($division, $dividend, $divisor) {
        return $dividend / $divisor;
        
    }
    public function modulo ($modulo, $dividend, $divisor) {
        return $dividend % $divisor;
        
    }
    public function exponentation ($exponentation, $base, $exponent) {
        return pow($base, $exponent);
        
    }
    public function nthRoot ($nthRoot, $radicand, $degree) {
        return gmp_root($radicand, $degree);
        
    }
    
}
