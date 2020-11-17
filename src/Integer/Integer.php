<?php

declare(strict_types=1);

namespace ObjectValues\Integer;

use ObjectValues\NumberInterface;
use ObjectValues\ValueObjectInterface;

class Integer implements NumberInterface
{
    private int $integer;

    final protected function __construct(int $integer)
    {
        $this->integer = $integer;
    }

    public static function create(int $integer): self
    {
        return new Integer($integer);
    }

    public function notEquals(ValueObjectInterface $valueObject): bool
    {
        return false === $this->equals($valueObject);
    }

    public function equals(ValueObjectInterface $valueObject): bool
    {
        if (false === $valueObject instanceof self) {
            return false;
        }

        return $this->getNative() === $valueObject->getNative();
    }

    public function getNative(): int
    {
        return $this->integer;
    }

    public function __toString(): string
    {
        return (string)$this->integer;
    }

    public function greaterThan(NumberInterface $number): bool
    {
        return $this->integer > $number->getNative();
    }

    public function lowerThan(NumberInterface $number): bool
    {
        return $this->integer < $number->getNative();
    }
}
