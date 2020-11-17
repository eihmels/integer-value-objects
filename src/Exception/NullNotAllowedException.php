<?php

declare(strict_types=1);

namespace ObjectValues\Exception;

use InvalidArgumentException;

class NullNotAllowedException extends InvalidArgumentException
{
    public static function nullNotAllowedException(): NullNotAllowedException
    {
        return new self('0 not allowed');
    }
}
