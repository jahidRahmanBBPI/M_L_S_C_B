<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function __construct()
    {
        $this->middleware("demo");
        
        // throw new \Exception('Not implemented');
    }

    function DemoAction(Request $request){
        return "hello";
    }
}
