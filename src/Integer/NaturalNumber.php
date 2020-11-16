<?php

declare(strict_types = 1);

namespace ObjectValues;

use ObjectValues\Integer\Exception\NullNotAllowedException;

class NaturalNumber extends PositiveNumber
{
    public static function create(int $integer, bool $withNull = false): self
    {
        if (false === $withNull && 0 === $integer) {
            throw NullNotAllowedException::NotANaturalNumberException();
        }

        return new self($integer);
    }
}
