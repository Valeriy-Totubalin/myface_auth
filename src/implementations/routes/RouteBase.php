<?php

namespace App\implementations\routes;

use App\exceptions\PatternErrorException;
use App\interfaces\routes\Route;
use Comet\Comet;

abstract class RouteBase implements Route
{
    protected static array $instances;

    protected Comet $app;

    protected function __construct() {}

    protected function __clone() {}

    public function __wakeup()
    {
        throw new PatternErrorException('Cannot unserialize a singleton.');
    }

    public static function getInstance(): self
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public function setApp(Comet $app): void
    {
        $this->app = $app;
    }

    protected function setApiVersion(int $version): void 
    {
        $this->app->setBasePath('/api/v' . $version);
    }
}
