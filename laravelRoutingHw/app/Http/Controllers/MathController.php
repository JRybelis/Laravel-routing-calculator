<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller //gate method
{
    public function addition($augend, $addend) {
        return view('When you add'.$augend.' and '.$addend.', you receive '.$augend + $addend.'.');
    }
    public function subtraction ($minuend, $subtrahend) {
        return view('When you subtract'.$minuend.' from '.$subtrahend.', you receive '.$minuend - $subtrahend.'.');
        
    }
    public function multiplication ($multiplier, $multiplicand) {
        return view('When you multiply'.$multiplier.' by '.$multiplicand.', you receive '.$multiplier * $multiplicand.'.');
        
    }
    public function division ($dividend, $divisor) {
        return view('When you divide'.$dividend.' by '.$divisor.', you receive '.$dividend / $divisor.'.');
        
    }
    public function modulo ($dividend, $divisor) {
        return view('When you divide'.$dividend.' by '.$divisor.', the remainder you receive is '.$dividend % $divisor.'.');
        
    }
    public function exponentation ($base, $exponent) {
        return view('When you raise'.$base.' to the power of '.$exponent.', you receive '.pow($base, $exponent).'.');
        
    }
    public function nthRoot ($radicand, $degree) {
        return view('When you pull the '.$degree.'th root of '.$radicand.', you receive '.gmp_root($radicand, $degree).'.');
        
    }
    
}
