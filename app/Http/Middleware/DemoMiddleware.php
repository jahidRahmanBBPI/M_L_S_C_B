<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $key = $request->header("API_KEY");
        // if($key == "Jahid"){
        //     return $next($request);
        // }else{
        //     // return response("", Response::HTTP_FORBIDDEN);
        //     return response()->json('unauthorized', 200);
        // }

        $key = $request->key;
        if($key == "Jahid"){
            return $next($request);
        }else{
            return redirect("/hello2");
        }
    }
}
