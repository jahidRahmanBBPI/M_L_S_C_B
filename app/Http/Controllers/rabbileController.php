<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rabbileController extends Controller
{
    public function home(){
        return view("rabbile.home");
    }
}
