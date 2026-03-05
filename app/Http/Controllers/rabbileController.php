<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rabbileController extends Controller
{
    public function home_practice(){
        $marks = 900;
        // Data Process ....
        $uesr = [
            ['name'=> 'jahid', 'city' => 'Brahmanbaria', 'age'=> '22'],
            ['name'=> 'ashik', 'city' => 'Pabna', 'age'=> '23'],
            ['name'=> 'emon', 'city' => 'Khulna', 'age'=> '27'],
        ];
        return view("rabbile.home",[
            "mark_value"=> $marks,
            "list"=> $uesr,
        ]);
    }
}
