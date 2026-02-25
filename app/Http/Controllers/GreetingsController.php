<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    function hi(){
        return 'hi';
    }

    function hello(){
        return 'hello';
    }

    function greet(Request $request, $name){
        print_r($request->all());
    }

    function protectedRequest(Request $request){
        $ip = $request->ip();   
        return response("Protected Response {$ip}");
    }
}
