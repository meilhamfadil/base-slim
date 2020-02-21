<?php namespace Core\Libraries;

use Psr\Container\ContainerInterface;
use Slim\Container;

class Loader
{
    private $db;
    private $controller;

    public function __construct(ContainerInterface $container, $controller)
    {
        $this->db = $container->get("db");
        $this->controller = $controller;
    }

    public function model($model, $alias = "")
    {
        if (class_exists('Models\\' . $model)) {
            $classname = 'Models\\' . $model;
            $attribute = explode("\\", $classname);
            $name = ($alias == "") ? strtolower(end($attribute)) : $alias;
            $this->controller->$name = new $classname($this->db);
            return 1;
        }
        return exit("Class $model not found");
    }

    public function library($libraries, $constructor = null)
    {
        if (class_exists('Libraries\\' . $libraries)) {
            $classname = 'Libraries\\' . $libraries;
            $attribute = explode("\\", $classname);
            $name = strtolower(end($attribute));
            $this->controller->$name = (is_null($constructor))
                ? new $classname()
                : new $classname($constructor);
            return 1;
        }
        return exit("Class $libraries not found");
    }
}
