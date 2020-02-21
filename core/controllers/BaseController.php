<?php namespace Core\Controllers;

use Code\Libraries\Authorization;
use Core\Libraries\Encryption;
use Core\Libraries\Loader;
use Psr\Container\ContainerInterface;
use \Slim\Container;
use Slim\Http\Response;

class BaseController
{

    protected $container;
    protected $encryption;
    protected $authorization;
    protected $load;

    public $output;

    public function __construct(ContainerInterface $container)
    {
        $this->load = new Loader($container, $this);
        $this->container = $container;
        $this->encryption = new Encryption($container->get("encryption_key"));
        $this->authorization = new Authorization($container->get("settings")['jwt']);
        $this->autoload($container->get("autoload"));
    }

    public function __get($name)
    {
        if (property_exists($this, $name))
            return $this->$name;
        return exit("Property $name doesn't exist");
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    private function autoload($autoload)
    {
        foreach ($autoload['model'] as $model => $alias) {
            $this->load->model($model, $alias);
        }

        foreach ($autoload['library'] as $model => $alias) {
            $this->load->library($model, $alias);
        }
    }

}
