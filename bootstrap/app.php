<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',   // remove if you drop the API (see step 6)
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->redirectGuestsTo(fn () => route('login'));  // was Authenticate.php
        $middleware->redirectUsersTo('/home');                  // was RedirectIfAuthenticated + RouteServiceProvider::HOME
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
