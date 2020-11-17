<?php

declare(strict_types=1);

namespace ObjectValues;

use ObjectValues\Exception\NotAPositiveNumber;
use ObjectValues\Integer;

class PositiveNumber extends Integer
{
    public static function create(int $integer): self
    {
        if (0 > $integer) {
            throw NotAPositiveNumber::notANaturalNumberException($integer);
        }

        return new self($integer);
    }
}
