<?php

declare(strict_types = 1);

namespace ObjectValues\Integer\Exception;

use InvalidArgumentException;

class NullNotAllowedException extends InvalidArgumentException
{
    public static function NotANaturalNumberException(): InvalidArgumentException
    {
        return new NotAPositiveNumber('0 not allowed');
    }
}