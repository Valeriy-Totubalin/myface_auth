<?php

namespace tests\implementations;

use App\exceptions\PatternErrorException;
use App\implementations\routes\RouteV1;
use App\interfaces\routes\Route;
use Error;
use PHPUnit\Framework\TestCase;

final class RouteV1Test extends TestCase
{    
    public function testCantCreateRouteV1(): void
    {
        $this->expectException(Error::class);
        $this->expectExceptionMessage('Call to protected App\implementations\routes\RouteBase::__construct() from scope tests\implementations\RouteV1Test');
        new RouteV1();
    }

    public function testGetInstance(): void
    {
        $route = RouteV1::getInstance();
        $this->assertInstanceOf(Route::class, $route);
    }

    public function testCantCloneRouteV1(): void
    {
        $route = RouteV1::getInstance();
        $this->expectException(Error::class);
        $this->expectExceptionMessage('Call to protected App\implementations\routes\RouteBase::__clone() from scope tests\implementations\RouteV1Test');
        clone $route;
    }

    public function testCantUnserializeRouteV1(): void
    {
        $route = RouteV1::getInstance();
        $this->expectException(PatternErrorException::class);
        $this->expectExceptionMessage('Cannot unserialize a singleton.');
        unserialize(serialize($route));
    } 

    public function testGetApiVersion(): void
    {
        $route = RouteV1::getInstance();
        $this->assertSame(1, $route->getApiVersion());
    }
}
