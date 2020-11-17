<?php

declare(strict_types=1);

namespace ObjectValues;

use ObjectValues\Exception\NotANaturalNumberException;

class NaturalNumber extends Integer
{
    public static function create(int $integer): self
    {
        if (0 > $integer) {
            throw NotANaturalNumberException::notANaturalNumberException($integer);
        }

        return new self($integer);
    }
}
