<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mid_checController extends Controller
{
    function mid(): string{
        return "hello";
    }

    function DemoAction1(){
        return "Hello 1";
    }

    function DemoAction2(){
        return "hello 2";
    }

    function DemoAction3(){
        return "hello 3";
    }

    function DemoAction4(){
        return "hello 4";
    }

    function manupulate_request_header(Request $request){
        return $request->header();
    }

    function rate_limit(){
        return "hello";
    }
}
