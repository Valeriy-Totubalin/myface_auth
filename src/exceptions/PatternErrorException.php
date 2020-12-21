<?php

namespace App\exceptions;

use Exception;

class PatternErrorException extends Exception
{
    public function getName()
    {
        return 'Pattern error';
    }
}
