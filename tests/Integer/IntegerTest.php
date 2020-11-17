<?php

declare(strict_types=1);

namespace Tests\Integer;

use ObjectValues\Integer\Integer;
use PHPUnit\Framework\TestCase;

final class IntegerTest extends TestCase
{
    /** @dataProvider validIntegers */
    public function testWithPositiveNumber(int $integer): void
    {
        $integerValueObject = Integer::create($integer);
        self::assertEquals($integer, $integerValueObject->getNative());
    }

    public function testEqualsWithToInteger(): void
    {
        $integerValueObject = Integer::create(1);
        $secondIntegerValueObject = Integer::create(1);

        self::assertTrue($integerValueObject->equals($secondIntegerValueObject));
    }

    public function validIntegers(): array
    {
        return [[1], [-1]];
    }
}
