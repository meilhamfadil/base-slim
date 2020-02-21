<?php

namespace Middleware;

use Core\Middleware\BaseMiddleware;
use Slim\Http\Request;
use Slim\Http\Response;

class ExampleMiddleware extends BaseMiddleware
{

    public function __invoke(Request $request, Response $response, callable $next)
    {
        if ($request->getQueryParam("token") != 123)
            return $response->write("Unauthorized");

        echo "Hello";
        return $response = $next($request, $response);
    }
}
