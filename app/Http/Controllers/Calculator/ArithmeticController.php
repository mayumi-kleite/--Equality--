<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
    public function sum(int $v1, int $v2)
    {
        $sum = $v1 + $v2;

        return view('Calculator.sum', ['valor1' => $v1, 'valor2' => $v2, 'soma' => $sum]);
    }

    public function subtraction(int $v1, int $v2)
    {
        $sub = $v1 - $v2;

        return view('Calculator.subtraction', ['valor1' => $v1, 'valor2' => $v2, 'subtracao' => $sub]);
    }
}
