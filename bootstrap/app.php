<?php
use Illuminate\Session\Middleware\StartSession;
use App\Http\Middleware\UserAuth;
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

    // 1. Start session middleware
    $middleware->append([
        StartSession::class,
    ]);

    // 2. Your custom middleware
    $middleware->alias([
        'userauth' => UserAuth::class,
    ]);
})

    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
