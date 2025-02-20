<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function calculate($operation1, $val1, $val2, $operation2, $val3, $val4)
    {
        // ito yung function para makapag add, subtract, multiply o divide, nag eerror din pag nag divide ng zero.
        function performCalculation($operation, $num1, $num2) {
            switch ($operation) {
                case 'add': return $num1 + $num2;
                case 'subtract': return $num1 - $num2;
                case 'multiply': return $num1 * $num2;
                case 'divide': 
                    return $num2 == 0 ? 'Error: Cannot divide by zero' : $num1 / $num2;
                default: return 'Error: Invalid operation';
            }
        }

        // kinacalculate na yuung dalawang math operations.
        $result1 = performCalculation($operation1, $val1, $val2);
        $result2 = performCalculation($operation2, $val3, $val4);

        // Prineprepare niya yung results para ma display sa view.
        $results = [
            ['val1' => $val1, 'val2' => $val2, 'operator' => $operation1, 'result' => $result1],
            ['val1' => $val3, 'val2' => $val4, 'operator' => $operation2, 'result' => $result2]
        ];
        // pumupunta sa view yung mga results.
        return view('result', compact('results'));
    }
}

