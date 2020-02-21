<?php namespace Core\Libraries;


class Parser
{

    public static function response($code = 0, $message = "", $data = null)
    {
        return array(
            "code" => $code,
            "message" => $message,
            "data" => $data
        );
    }

}