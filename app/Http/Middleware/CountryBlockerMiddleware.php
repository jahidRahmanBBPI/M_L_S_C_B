<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryBlockerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedCountryList = ['BD'];
        $countryCode = $request->header('cf-ipcountry',"BD");
        if(!in_array($countryCode, $allowedCountryList)){
            abort(403, "You are not allowed to access this site");;
        }
        return $next($request);
    }
}
