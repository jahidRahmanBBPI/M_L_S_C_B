<?php

use App\Http\Middleware\DemoMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Middleware\ThrottleRequests;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'demo'=> DemoMiddleware::class,
        ]);

        $middleware->append(DemoMiddleware::class); // append means apply mid whole app.
        
        // $middleware->append(ThrottleRequests::class.':60,1'); // ১ মিনিটে ৬০ বার request allowed


        // This is demo exam to apply mid in whole appl

        // $middleware->append(DemoMiddleware::class);
        // $middleware->append(LogMiddleware::class);
        // $middleware->append(AuthMiddleware::class);
// ==============================================================
    //     $middleware->append([
    //     DemoMiddleware::class,
    //     LogMiddleware::class,
    //     AuthMiddleware::class,
    // ]);

    // $middleware->append('throttle:global-limit');  // This is for the whole app check AppServiceProvider.

    }) 
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
