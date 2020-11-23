<?php

declare(strict_types=1);

namespace Tests\Integer;

use Assert\InvalidArgumentException;
use ObjectValues\NaturalNumberWithoutNull;
use PHPUnit\Framework\TestCase;

final class NaturalNumberWithoutNullTest extends TestCase
{
    public function testCreateNotAllowedNullNumber(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectErrorMessage('Value "0" was not expected to be equal to value "0".');
        NaturalNumberWithoutNull::create(0);
    }

    public function testCreateNegativeNumber(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Provided "-1" is not greater or equal than "0".');
        NaturalNumberWithoutNull::create(-1);
    }

    public function testCreatePositiveNumber(): void
    {
        $this->expectNotToPerformAssertions();
        NaturalNumberWithoutNull::create(1);
    }
}
