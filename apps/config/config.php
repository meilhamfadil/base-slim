<?php defined('BASEPATH') or exit('No direct script access allowed');

require "database.php";
return [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        'addContentLengthHeader' => false,
        'encryption_key' => "Hasdasd90as09d8as",
        'jwt' => [
            'key' => "1238128932j3223h4jk32",
            'lifetime' => strtotime('+8 hours')
        ],
        'databases' => $database,
        'autoload' => [
            "model" => [],
            "library" => []
        ],
        'whitelist' => [
            
        ],
        'whitelist_ip_partner' => [
            "::1", // Localhost
            "167.71.205.101" // Payment Gateway
        ]
    ]
];
