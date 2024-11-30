<?php

use App\Http\Middleware\Cliente;
use App\Http\Middleware\Sistemas;
use App\Http\Middleware\Ventas;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'ventas'=>Ventas::class,
            'sistemas'=>Sistemas::class,
            'cliente'=>Cliente::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
