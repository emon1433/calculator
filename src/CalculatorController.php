<?php

namespace Emdojo\Calculator;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($num1, $num2)
    {
        $result = $num1 + $num2;

        return view('calculator::result', compact('result'));
    }

    public function subtract($num1, $num2)
    {
        $result = $num1 - $num2;

        return view('calculator::result', compact('result'));
    }
}
