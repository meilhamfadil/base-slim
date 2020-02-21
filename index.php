<?php

use Slim\App;

// Setup Environtment
define('ENVIRONMENT', isset($_SERVER['CPNAPI']) ? $_SERVER['CPNAPI'] : 'development');
define('BASEPATH', __DIR__);
date_default_timezone_set("Asia/Jakarta");

// Require Autoload & Initialize Apps
require_once __DIR__ . '/vendor/autoload.php';
$config = require_once "apps/config/config.php";
$app = new App($config);

require_once __DIR__ . '/core/autoload.php';

try {
    $app->run();
} catch (Throwable $e) {
    exit("Something error with SLIM");
}

// alias composer="php /usr/local/bin/composer.phar"