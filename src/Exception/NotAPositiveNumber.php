<?php

declare(strict_types=1);

namespace ObjectValues\Exception;

use InvalidArgumentException;

class NotAPositiveNumber extends InvalidArgumentException
{
    public static function notANaturalNumberException(int $integer): NotAPositiveNumber
    {
        return new self(sprintf('%s is not a natural number', (string)$integer));
    }
}
