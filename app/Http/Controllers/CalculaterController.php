<?php

namespace App\Http\Controllers;

use App\Models\Calculater;
use App\Services\CalculatorService;
use Illuminate\Http\Request;

class CalculaterController extends Controller
{
    public function index()
    {
        $results =  Calculater::all();
        return view('calculater', compact('results'));
    }
    public function calculate(Request $request)
    {
       
        $validated = $request->validate([
            'a' => 'required',
            'b' => 'required',
            'operation' => 'required',
        ]);
        $a = $request->a;
        $b = $request->b;
        $operation = $request->operation;

        if ($operation == 'plus') {
            $result = $a + $b;
        } elseif ($operation == 'minus') {
            $result = $a - $b;
        } elseif ($operation == 'multi') {
            $result = $a * $b;
        } else {
            $result = $a / $b;
        }

        Calculater::create([
            'a' => $a,
            'b' => $b,
            'operation' => $operation,
            'result' => $result,
        ]);
        return redirect('/');
    }

    public function getusers(){
        User::where('id',5)->first();
    }
}
