<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller 
{ //gate methods
    public function addition($addition, $augend, $addend) {
        return view('math.operations',['urlVariable1' => $addition, 'urlVariable2' => $augend, 'urlVariable3' => $addend]);
            //'When you add'.$augend.' and '.$addend.', you receive '.$augend + $addend.'.'
    }
    public function subtraction ($subtraction, $minuend, $subtrahend) {
        return view('math.operations',['urlVariable1' => $subtraction, 'urlVariable2' => $minuend, 'urlVariable3' => $subtrahend]);
            //'When you subtract'.$minuend.' from '.$subtrahend.', you receive '.$minuend - $subtrahend.'.');
        
    }
    public function multiplication ($multiplication, $multiplier, $multiplicand) {
        return view('math.operations',['urlVariable1' => $multiplication, 'urlVariable2' => $multiplier, 'urlVariable3' => $multiplicand]);
            //'When you multiply'.$multiplier.' by '.$multiplicand.', you receive '.$multiplier * $multiplicand.'.');
        
    }
    public function division ($division, $dividend, $divisor) {
        return view('math.operations',['urlVariable1' => $division, 'urlVariable2' => $dividend, 'urlVariable3' => $divisor]);
            //'When you divide'.$dividend.' by '.$divisor.', you receive '.$dividend / $divisor.'.');
        
    }
    public function modulo ($modulo, $dividend, $divisor) {
        return view('math.operations',['urlVariable1' => $modulo, 'urlVariable2' => $dividend, 'urlVariable3' => $divisor]);
            //'When you divide'.$dividend.' by '.$divisor.', the remainder you receive is '.$dividend % $divisor.'.');
        
    }
    public function exponentation ($exponentation, $base, $exponent) {
        return view('math.operations',['urlVariable1' => $exponentation, 'urlVariable2' => $base, 'urlVariable3' => $exponent]);
            //'When you raise'.$base.' to the power of '.$exponent.', you receive '.pow($base, $exponent).'.');
        
    }
    public function nthRoot ($nthRoot, $radicand, $degree) {
        return view('math.operations',['urlVariable1' => $nthRoot, 'urlVariable2' => $radicand, 'urlVariable3' => $degree]);
            //'When you pull the '.$degree.'th root of '.$radicand.', you receive '.gmp_root($radicand, $degree).'.');
        
    }
}
