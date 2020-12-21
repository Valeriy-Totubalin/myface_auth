<?php

namespace App\implementations\factories\routes;

use App\implementations\routes\RouteV1;
use App\interfaces\factories\routes\RoutesFactory as RoutesFactoryInterface;
use Comet\Comet;

class RoutesFactory implements RoutesFactoryInterface
{
    private Comet $app;

    public function __construct(Comet $app)
    {
        $this->app = $app;
    }

    public function createRouteV1(): RouteV1
    {
        $route = RouteV1::getInstance();
        $route->setApp($this->app);
        
        return $route;
    }
}
