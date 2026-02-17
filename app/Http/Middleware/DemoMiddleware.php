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

        // Redirect
        // $key = $request->key;
        // if($key == "Jahid"){
        //     return $next($request);
        // }else{
        //     return redirect("/hello2");
        // }

        //Group
        // $key = $request->key;
        // if($key == "Jahid"){
        //     return $next($request);
        // }else{
        //     return response()->json('invalid', 401);
        // }

        // 25 [Middleware] Manupulate Request Header
        // $request->headers->add(["email"=>"jahid@aad.com"]); // when not exist email in header.
        // $request->headers->replace(["email"=>"rahmanjahid645@gmail.com"]); // if exist email in header then replace

        // $request->headers->remove("email"); // To remove header email.
        return $next($request);
    }
}
