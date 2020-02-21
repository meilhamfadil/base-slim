<?php namespace Code\Libraries;

use DateTime;
use Exception;
use Firebase\JWT\JWT;

class Authorization
{

    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function validate($token)
    {
        try {
            $credential = json_decode(JWT::decode($token, $this->config['key'], array('HS256')), false);
            if (!isset($creden->active))
                return null;

            $d1 = new DateTime(date('Y-m-d H:i:s'));
            $d2 = new DateTime($credential->active);
            if ($d1 > $d2)
                return null;

            return $credential;
        } catch (Exception $exception) {
            return null;
        }
    }

    public function generate($data)
    {
        $data['active'] = date('Y-m-d H:i:s', $this->config['lifetime']);
        return JWT::encode($data, $this->config['key']);
    }
}
