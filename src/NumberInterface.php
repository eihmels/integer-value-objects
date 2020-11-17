<?php

declare(strict_types=1);

namespace ObjectValues;

interface NumberInterface
{
    public function equals(self $number): bool;
    public function __toString(): string;
    public function native(): int;
    public function greaterThan(self $number): bool;
    public function lowerThan(self $number):bool;
}
