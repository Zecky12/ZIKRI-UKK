<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $expression = $request->input('expression');
        $result = $this->evaluateExpression($expression);

        return view('calculator', ['result' => $result, 'expression' => $expression]);
    }

    private function evaluateExpression($expression)
    {
        // Menggunakan fungsi eval untuk mengevaluasi ekspresi matematika
        // Ini hanya contoh sederhana, penggunaan eval harus hati-hati dan validasi ekspresi
        try {
            eval('$result = ' . $expression . ';');
            return $result;
        } catch (\Throwable $th) {
            return 'Error';
        }
    }
}
