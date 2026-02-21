<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
    // function page(Request $request){
    //     $num1 = $request->num1;
    //     $num2 = $request->num2;
    //     $num = $num1 + $num2;
    //     $data = ['result'=>$num];
    //     return view('Home', $data);
    // }

    function for_loop(){
        return view('Home');
    }
}
// 35