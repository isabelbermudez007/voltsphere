<?php

use App\Http\Middleware\clientes;
use App\Http\Middleware\Sistemas;
use App\Http\Middleware\ventas;
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
            'ventas'=>ventas::class,
            'sistemas'=>Sistemas::class,
            'cliente'=>clientes::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
