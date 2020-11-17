<?php

declare(strict_types=1);

namespace ObjectValues;

use ObjectValues\Integer\Exception\NullNotAllowedException;
use ObjectValues\Integer\PositiveNumber;

class NaturalNumber extends PositiveNumber
{
    public static function create(int $integer, bool $withNull = false): self
    {
        if (false === $withNull && 0 === $integer) {
            throw NullNotAllowedException::nullNotAllowedException();
        }

        return new self($integer);
    }
}
