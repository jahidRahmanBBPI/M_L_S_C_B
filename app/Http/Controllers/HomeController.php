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

    // For Loop
    function for_loop(){
        return view('Home');
        
    }

    // Foreach loop
    function foreach(){
        $data = [
            ['name'=>'Ashik vai', 'city'=>'Pabna'],
            ['name'=>'Emon vai', 'city'=>'Khulna'],
            ['name'=>'Raza vai', 'city'=>'Maymansing'],
            ['name'=>'Jahid', 'city'=>'Brahmanbaria'],
        ];
        return view('Home',[
            'users'=> $data,
        ]);
    }
}
// 35