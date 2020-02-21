<?php defined('BASEPATH') or exit('No direct script access allowed');

use Middleware\ExampleMiddleware;
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/favicon.ico', function (Request $request, Response $response, $args) {
    return $response->withStatus(204, "No Content");
});

$app->get("/", function (Request $request, Response $response, $args) {
    return $response->withStatus(403)->write("Forbidden");
});

$app->get("/example", "Controllers\Example:example")
    ->add(new ExampleMiddleware($app));

// $app->group("/example", function (App $app) {
//     $app->get("/get", "Controllers\Example:example");
// });
