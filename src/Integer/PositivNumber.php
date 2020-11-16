<?php

declare(strict_types = 1);

namespace ObjectValues;

use ObjectValues\Integer\Exception\NotAPositiveNumber;

class PositivNumber extends Integer
{
    public static function create(int $integer): Integer
    {
        if (0 > $integer) {
            throw NotAPositiveNumber::NotANaturalNumberException($integer);
        }

       return new self($integer);
    }
}
