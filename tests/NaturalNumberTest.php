<?php

declare(strict_types=1);

namespace Tests\Integer;

use Assert\InvalidArgumentException;
use ObjectValues\Integer;
use ObjectValues\NaturalNumber;
use PHPUnit\Framework\TestCase;

final class NaturalNumberTest extends TestCase
{
    public function testNative(): void
    {
        $integerValueObject = NaturalNumber::create(1);
        self::assertEquals(1, $integerValueObject->native());
    }

    public function testCreateNotAllowedNullNumber(): void
    {
        $this->expectNotToPerformAssertions();
        NaturalNumber::create(0);
    }

    public function testToString(): void
    {
        $number = Integer::create(1);
        $this->assertEquals('1', (string) $number);
    }

    public function testCreateNegativeNumber(): void
    {

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Provided "-1" is not greater or equal than "0".');
        NaturalNumber::create(-1);
    }
}
