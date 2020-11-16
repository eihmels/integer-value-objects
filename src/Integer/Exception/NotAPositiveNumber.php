<?php

declare(strict_types = 1);

namespace ObjectValues\Integer\Exception;

use InvalidArgumentException;

class NotAPositiveNumber extends InvalidArgumentException
{
    public static function NotANaturalNumberException(int $integer): NotAPositiveNumber
    {
        return new self(sprintf('%s is not a natural number', (string)$integer));
    }
}
