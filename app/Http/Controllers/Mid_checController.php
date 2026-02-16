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
}
