<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PostCalculatorController extends Controller
{
    public function show() {
        $result = Session::get('result', 'not found'); // retrieves the operation result from session

        Session::put('result', null); //  the operation result

        return view('postCalculator.show', ['result' =>$result]);
    }

    public function calculate (Request $request) {
        switch ($request->operations) {
            case 'addition':
                $result = $request->term1 + $request->term2;
                break;
            case 'subtraction':
                $result = $request->term1 - $request->term2;
                break;
            case 'multiplication':
                $result = $request->term1 * $request->term2;
                break;
            case 'division':
                $result = $request->term1 / $request->term2;
                break;
            case 'modulo':
                $result = $request->term1 % $request->term2;
                break;
            case 'exponentation':
                $result = pow($request->term1, $request->term2);
                break;
            case 'nthRoot':
                $result = gmp_root($request->term1, $request->term2);
                break;
        }
        
        Session::put('result', $result); //saves operation result to session

        return redirect()->back();
    }
}
