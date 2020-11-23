<?php

declare(strict_types=1);

namespace ObjectValues;

use Assert\Assertion;

class NaturalNumberWithoutNull extends NaturalNumber
{
    public static function create(int $integer): self
    {
        Assertion::notEq($integer, 0);

        return new self(parent::create($integer)->native());
    }
}
