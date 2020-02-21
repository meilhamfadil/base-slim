<?php

namespace Core\Models;

use Buki\Pdox;

defined('BASEPATH') or exit('No direct script access allowed');

class BaseModel
{

    public function __construct($databases)
    {
        foreach ($databases as $db => $param) {
            $this->{$db} = new Pdox($param);
        }
    }

    public function __get($name)
    {
        if (property_exists($this, $name))
            return $this->name;
        return exit("Property $name doesn't exist");
    }

}
