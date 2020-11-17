<?php

declare(strict_types=1);

namespace ObjectValues;

use ObjectValues\Exception\NotANaturalNumberException;

class NaturalNumberWithoutNull extends NaturalNumber
{
    public static function create(int $integer): self
    {
        if (0 === $integer) {
            throw NotANaturalNumberException::nullNotAllowedException();
        }

        return new self(parent::create($integer)->native());
    }
}
