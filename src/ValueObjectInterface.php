<?php

namespace ObjectValues;


interface ValueObjectInterface
{
    public function equals(self $valueObject): bool;
    public function notEquals(self $valueObject): bool;
    public function __toString(): string;
}