<?php

namespace App\interfaces\routes;

interface Route
{
    public function initRules(): void;

    public function getApiVersion(): int;
} 
