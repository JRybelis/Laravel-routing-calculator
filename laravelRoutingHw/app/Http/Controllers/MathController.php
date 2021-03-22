<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller 
{ //gate methods
    public function mathOperation($operation, $term1, $term2) {
        if ($operation == 'addition') {
            $result = $term1 + $term2;
        } elseif ($operation == 'subtraction'){
            $result = $term1 - $term2;
        } elseif ($operation == 'multiplication') {
            $result = $term1 * $term2;
        } elseif ($operation == 'division') {
            $result = $term1 / $term2;
        } elseif ($operation == 'modulo') {
            $result = $term1 % $term2;
        } elseif ($operation == 'exponentation') {
            $result = pow($term1, $term2);
        } elseif ($operation == 'nthRoot') {
            $result = gmp_root($term1, $term2);
        }
    return view('math.operations',['operation'=> $operation, 'result' => $result, 'term1' => $term1, 'term2' => $term2]);
    }
}