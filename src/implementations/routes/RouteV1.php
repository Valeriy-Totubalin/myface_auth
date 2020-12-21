<?php

namespace App\implementations\routes;

class RouteV1 extends RouteBase
{
    private const API_VERSION = 1;

    public function initRules(): void
    {
        $this->setApiVersion(self::API_VERSION);

        $this->app->get('/hello', 
            function ($request, $response) {        
                $data = [ "message" => "Hello, myface_auth!" ];
                return $response
                    ->with($data);
        });
    }

    public function getApiVersion(): int
    {
        return self::API_VERSION;
    }
}
