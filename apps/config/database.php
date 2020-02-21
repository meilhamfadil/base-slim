<?php defined('BASEPATH') or exit('No direct script access allowed');

$database = (ENVIRONMENT == "production") ? array(
    'db' => array(
        'driver'    => 'pgsql',
        'host'      => '',
        'port'      => '5432',
        'database'  => '',
        'username'  => 'postgres',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => ''
    )
) : array(
    'db' => array(
        'driver'    => 'pgsql',
        'host'      => '',
        'port'      => '5432',
        'database'  => '',
        'username'  => 'postgres',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => ''
    )
);

/*157.230.47.115*/