<?php

declare(strict_types=1);

namespace ObjectValues;

use Assert\Assertion;

class NaturalNumber extends Integer
{
    public static function create(int $integer): self
    {
        Assertion::greaterOrEqualThan($integer, 0);

        return new self($integer);
    }
}
