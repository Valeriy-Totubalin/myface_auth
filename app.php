<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\implementations\factories\routes\RoutesFactory;

$app = new Comet\Comet([
    'host' => '127.0.0.1',
    'port' => 8080,
]);

$routeFactory = new RoutesFactory($app);
$route = $routeFactory->createRouteV1();
$route->initRules();

$app->run();
