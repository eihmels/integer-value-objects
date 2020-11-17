<?php

declare(strict_types=1);

namespace Tests\Integer;

use ObjectValues\Exception\NotANaturalNumberException;
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

        $this->expectException(NotANaturalNumberException::class);
        $this->expectErrorMessage(NotANaturalNumberException::notANaturalNumberException(-1)->getMessage());
        NaturalNumber::create(-1);
    }
}
