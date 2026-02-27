<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "Test Middleware". '<br>';

        // Request redirection.
        // if($request->path() == 'index'){
        //     return redirect('/store');
        // }
        // return $next($request);

        $token = $request->header("token");
        if($token == 123){
            return $next($request);
        }
        return response()->json(['unauthorized'], 401);
    }
}
