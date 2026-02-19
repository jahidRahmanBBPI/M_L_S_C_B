<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // php artisan make:controller singleActionController --invokable   
        return "I am single action controller";
    }
}
