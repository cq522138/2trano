<?php

namespace App\Http\Controllers;

use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function plus(Request $request)
    {
        $number3 = null;
        $number1 = $request->number1;
        $number2 = $request->number2;
//        return view('index', compact('number3'));
        if ($request->sum == '+') {
            $number3 = $number1 + $number2;

        }

        if ($request->minus == '-') {
            $number3 = $number1 - $number2;
        }

        if ($request->multiply == '*') {
            $number3 = $number1 * $number2;
        }

        if($request->split=='/'){
            if($number2!==0){
                $number3 = $number1/$number2;
                return view('index',compact('number3'));
            }else
                echo
                'ngu qua';
        }


        return view('index',compact('number3'));



    }
}


