<?php

declare(strict_types = 1);

namespace Tests\Integer;

use ObjectValues\Exception\NullNotAllowedException;
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

        $this->expectException(NullNotAllowedException::class);
        $this->expectExceptionMessage(NullNotAllowedException::nullNotAllowedException()->getMessage());
        $integerValueObject = NaturalNumber::create(0);
    }

    public function testCreateAllowedNullNumber(): void
    {
       $this->expectNotToPerformAssertions();
        $integerValueObject = NaturalNumber::create(0,true);
    }

}
