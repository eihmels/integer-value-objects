<?php

declare(strict_types = 1);

namespace ObjectValues\Integer;

use ObjectValues\Integer\Exception\NotAPositiveNumber;

class PositiveNumber extends Integer
{
    public static function create(int $integer): self
    {
        if (0 > $integer) {
            throw NotAPositiveNumber::NotANaturalNumberException($integer);
        }

       return new self($integer);
    }
}
