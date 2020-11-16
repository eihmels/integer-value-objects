<?php

declare(strict_types = 1);

namespace ObjectValues;

use ObjectValues\Integer\Exception\NotAPositiveNumber;
use ObjectValues\Integer\Exception\NullNotAllowedException;

class NaturalNumber extends PositivNumber
{
    public static function create(int $integer, bool $withNull = false): NaturalNumber
    {
        if (false === $withNull && 0 === $integer) {
            throw NullNotAllowedException::NotANaturalNumberException();
        }

        return new self($integer);
    }
}
