<?php

namespace LP\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    
    public function add($a,$b){
         $reult = $a+$b;
        return view('calculator::result',compact('reult'));    
    }

    public function subtract($a,$b){
        $reult = $a-$b;
        return view('calculator::result',compact('reult'));    
    }

}
