<?php use Slim\Container;

$container = $app->getContainer();

$container['db'] = function (Container $c) {
    return $c->get('settings')['databases'];
};

$container['autoload'] = function (Container $c) {
    return $c->get("settings")['autoload'];
};

$container['encryption_key'] = function (Container $c) {
    return $c->get("settings")['encryption_key'];
};

$container['whitelist_ip_partner'] = function (Container $c){
    return $c->get("settings")['whitelist_ip_partner'];
};

$container['jwt'] = function (Container $c) {
    return $c->get("settings")['jwt'];
};
