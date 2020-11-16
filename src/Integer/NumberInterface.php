<?php

declare(strict_types = 1);

namespace ObjectValues;

interface NumberInterface extends ValueObjectInterface
{
    public function get(): int;
    public function greaterThan(self $number): bool;
    public function lowerThan(self $number):bool;
}
