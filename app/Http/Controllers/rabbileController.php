<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rabbileController extends Controller
{
    public function home_practice(){
        $marks = 900;
        // Data Process ....
        return view("rabbile.home",[
            "mark_value"=> $marks
        ]);
    }
}
