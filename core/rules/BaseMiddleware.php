<?php namespace Core\Middleware;


abstract class BaseMiddleware
{

    protected $load;

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

}