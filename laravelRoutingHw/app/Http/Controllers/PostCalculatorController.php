<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PostCalculatorController extends Controller
{
    public function show() {
        $result = Session::get('addition', 'not found');

        Session::put('addition', null);

        return view('postCalculator.show', ['result' =>$result]);
    }

    public function calculate(Request $request) {
        $addition = $request->term1 + $request->term2;
        
        Session::put('addition', $addition);

        return redirect()->back();
    }
}
