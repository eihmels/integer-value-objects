<?php

declare(strict_types=1);

namespace ObjectValues;

use ObjectValues\Exception\NotANaturalNumberException;

class NaturalNumber extends Integer
{
    public static function create(int $integer, bool $withNull = false): self
    {
        if (0 > $integer) {
            throw NotANaturalNumberException::notANaturalNumberException($integer);
        }

        if (false === $withNull && 0 === $integer) {
            throw NotANaturalNumberException::nullNotAllowedException();
        }

        return new self($integer);
    }
}
