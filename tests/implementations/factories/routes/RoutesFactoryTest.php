<?php

namespace tests\implementations\factories\routes;

use App\implementations\factories\routes\RoutesFactory;
use PHPUnit\Framework\TestCase;
use App\interfaces\routes\Route;
use Comet\Comet;

class RoutesFactoryTest extends TestCase
{
    public function testCreateRouteV1(): void
    {
        /** @var Comet $app */
        $app = $this->createMock(Comet::class);
        $routesFactory = new RoutesFactory($app);
        $route = $routesFactory->createRouteV1();
        self::assertInstanceOf(Route::class, $route);
    }
}
