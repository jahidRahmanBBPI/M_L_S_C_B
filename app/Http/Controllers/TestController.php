<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Http\Request;

class TestController extends Controller
{
    // function __construct(){
    //     $this->middleware("test")->except('store');
    //     $this->middleware("test")->only('store');
    // }
    function index(Request $request){
        return $request->headers;
        // return "From Index Method";
        // return $request->headers();
    }

    function store(){
        return "From Store Method";
    }

    function show(){
        return "From Show Method";
    }
}
