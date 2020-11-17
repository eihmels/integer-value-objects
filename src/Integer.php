<?php

declare(strict_types = 1);

namespace ObjectValues;

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

    public function __toString(): string
    {
        return (string)$this->integer;
    }

    public function greaterThan(NumberInterface $number): bool
    {
        return $this->integer > $number->native();
    }

    public function lowerThan(NumberInterface $number): bool
    {
        return $this->integer < $number->native();
    }

    public function equals(NumberInterface $valueObject): bool
    {
        return $this->native() === $valueObject->native();
    }

    public function native(): int
    {
        return $this->integer;
    }
}
