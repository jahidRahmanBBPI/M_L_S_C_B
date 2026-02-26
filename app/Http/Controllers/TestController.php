<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        return "From Index Method";
    }

    function store(){
        return "From Store Method";
    }

    function show(){
        return "From Show Method";
    }
}
