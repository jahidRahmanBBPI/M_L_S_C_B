<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SimpleResponseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $response = $next($request);
        // $response->setContent('1,2,3,4,5');
        // return $response;

        $response = $next($request);
        $currentContent = $response->getContent();
        $newContent = $currentContent. ', Have a nice day!';
        $response->setContent($newContent);
        return $response;
    }
}
