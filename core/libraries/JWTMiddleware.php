<?php namespace Core\Libraries;

use Code\Libraries\Authorization;
use Interop\Container\Exception\ContainerException;
use Libraries\Hook;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class JWTMiddleware
{

    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    function __invoke(Request $request, Response $response, callable $next)
    {
        $whitelist = $this->container->get(SETTING)[WHITELIST_ROUTES];
        if (in_array($request->getUri()->getPath(), $whitelist))
            return $response = $next($request, $response);

        $token = $request->getHeader(TOKEN);

        if (count($token) == 0)
            return $response->withJson(Parser::response(C1003, M1003));

        $token = array_pop($token);

        if (empty($token))
            return $response->withJson(Parser::response(C1003, M1003));

        $authorization = null;
        $authorization = new Authorization($this->container->get(SETTING)[JWT]);

        $hook = new Hook();
        $hook->run($this->container);

        if (is_null($hook->result)) {
            $validateToken = $authorization->validate($token);
            if ($validateToken != null) {
                $request = $request->withAttribute(CREDENTIAL, $validateToken);
                return $response = $next($request, $response);
            }
        } else {
            if ($hook->result == FAILURE) {
                return $response->withJson(Parser::response(C1003, M1003));
            } else if ($hook->result == OUTPUT) {
                return $response->withJson($hook->data);
            } else if ($hook->result == NEXT) {
                $request = $request->withAttribute(CREDENTIAL, $hook->data);
                return $response = $next($request, $response);
            }

        }

        return $response->withJson(Parser::response(C1003, M1003));
    }

}
