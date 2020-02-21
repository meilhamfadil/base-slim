<?php

namespace Controllers;

use Core\Controllers\BaseController;
use Core\Libraries\Parser;
use Slim\Http\Request;
use Slim\Http\Response;

class Example extends BaseController
{

    public function example(Request $request, Response $response, $args)
    {
        echo " Hilman";
    }
}
